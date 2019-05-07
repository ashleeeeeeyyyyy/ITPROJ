<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class LoginController extends Controller
{
    function index(){
     return view('/login');
    }

    function checkLogin(Request $request){
      $request = array(
        'username' => 'required|max:10', 
        'password' => 'required|min:3'
        );

        $validator = \Validator::make(Input::all(), $request); 
        if ($validator->fails()) {
          return \Redirect::to('/')
          ->withErrors($validator)
          ->withInput(Input::except('password'));
        }else{
          $user_data = array(
            'username'  => Input::get('username'),
            'password'  => Input::get('password')
            );
        }

        if(Auth::attempt($user_data)){
          return redirect('user/reservation/dashboard');
        }else{
          return back()->with('error', 'Wrong Login Details');
        }
    }


    function successlogin(){
     return view('/user/reservation/dashboard');
    }

    function logout(Request $request){
    Auth::logout();
    return redirect('/');
    }
}
?>