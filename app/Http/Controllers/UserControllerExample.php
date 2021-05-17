<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\Models\Isos;
use App\Models\User;
use App\Models\RelUserIsos;


class UserControllerExample extends Controller
{

     /*Funcion que nos devuelve la vista basica de main */
    public function index()
    {
      if(Auth::check()){
        $listaIsos = DB::table('isos')
          ->select('isos.so','isos.idioma', 'isos.created_at', 'isos.size','isos.link_descarga')
          ->join(DB::raw('(SELECT id_iso FROM `rel_user_isos` where user_id = '.Auth::user()->id.') Usuario'), 
          function($join){$join->on('isos.id', '=', 'Usuario.id_iso');})->get();
        #$listaIsos = Isos::()->where('user_id', Auth::user()->id)->toArray();
        return view('main_menu', compact('listaIsos'));
      }else{
          /*$listaIsos = Isos::all()->toArray();*/
          return view('welcome');
      }
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


    /* Funciona para acabar con la sesión del usuario actual */
    function logout()
    {
     Auth::logout();
     return redirect()->to('/');
     
    }

    public function create(Request $request)
    {

        $tarea = new RelUserIsos();
        /* $tarea -> id = ''; */
        $tarea -> user_id = Auth::user()->id;
        $tarea -> id_iso = $request->input('SO');
        //$tarea -> created_at = '';
        //$tarea -> deleted_to = '';
        $result = $tarea -> save();
        if($result) {
            return redirect('/main');
        }
    }

    public function remove()
    {
      if(Auth::check()){
        
        $listaIsos = DB::table('isos')
        ->select('isos.so','isos.idioma', 'isos.created_at','Usuario.id')
        ->join(DB::raw('(SELECT id_iso, id FROM `rel_user_isos` where user_id = '.Auth::user()->id.') Usuario'), 
        function($join)
        {
           $join->on('isos.id', '=', 'Usuario.id_iso');
        })
        ->get();
        #$listaIsos = Isos::()->where('user_id', Auth::user()->id)->toArray();
        return view('remove_iso', compact('listaIsos'));

      }else{
          /*$listaIsos = Isos::all()->toArray();*/
          $listaIsos = Isos::all()->toArray();
          return view('remove_iso', compact('listaIsos'));
      }
    }

    public function removeItem($id)
    {
      if(Auth::check()){
        $result = RelUserIsos::where('id', $id)->delete();
        if ($result) {
          return redirect('/remove_iso'); 
        } else {
          $listaIsos = Isos::all()->toArray();
          return view('main_menu', compact('listaIsos'));
          }
      }
  }

  function addUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
      $data = $request->all(); 
	    $userCount = User::where('email', $data['email']);
	    if ($userCount->count()) {
		    return back()->with('error', 'Credenciales incorrectas, ya existe un usuario con ese email');
	    } else {
		    $user = User::create(request(['name','surname' ,'email', 'password']));
        auth()->login($user);
        return redirect()->to('/main');
	    }
        
    }

}

