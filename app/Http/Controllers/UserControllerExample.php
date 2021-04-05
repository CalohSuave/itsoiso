<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\Models\Isos;


class UserControllerExample extends Controller
{

     /*Funcion que nos devuelve la vista basica de main */
    public function index()
    {
      $listaIsos = Isos::all()->toArray();
      return view('main_menu', compact('listaIsos'));

    }

    /*Función nativa de Laraverl que nos ayuda hacer el Atuh del usuario en la BBDD */
    function checklogin(Request $request){
     
        $this->validate($request, [
            'email'   => 'required',
            'password'  => 'required|alphaNum|min:3']);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );
    
    if(Auth::attempt($user_data)){
      return redirect('main');
    }else{
      return back()->with('error', 'Credenciales incorrectas, revise los datos');
    }

    }

    /*Funcion que nos devuelve la vista del main_menu, es decir donde podemos crear ISO's y hacver logout */
    function successlogin()
    {
     return view('main_menu');
    }

    /* Funciona para acabar con la sesión del usuario actual */
    function logout()
    {
     Auth::logout();
     return redirect('/');
    }

    public function create(Request $request)
    {

        $tarea = new Isos();
        /* $tarea -> id = ''; */
        $tarea -> user_id = Auth::user()->id;
        $tarea -> so = $request->input('SO');
        //$tarea -> created_at = '';
        //$tarea -> deleted_to = '';
        $tarea -> size = 2;

        $result = $tarea -> save();
        if($result) {
            return redirect('/main');
        }
    }





}
