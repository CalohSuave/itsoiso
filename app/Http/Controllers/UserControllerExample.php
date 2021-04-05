<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;


class UserControllerExample extends Controller
{


    public function index()
    {
        return view('welcome');
    }

    function checklogin(Request $request){
     
        $this->validate($request, [
            'email'   => 'required',
            'password'  => 'required|alphaNum|min:3']);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

    if(Auth::attempt($user_data)){
      return redirect('main/successlogin');
    }else{
      return back()->with('error', 'Credenciales incorrectas, revise los datos');
    }

    }

    function successlogin()
    {
     return view('main_menu');
    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }




}
