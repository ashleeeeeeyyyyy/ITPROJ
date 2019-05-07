<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Validator;
use DB;
use Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'l_name' => 'required|string|max:30',
            'f_name' => 'required|string|max:30',
            'm_name' => 'required|string|max:30',
            'office' => 'required|string|max:30',
            'position' => 'required|string|max:30',
            'username' => 'required|string|min:3|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $users = new User;
        $users->l_name = $request->input('l_name');
        $users->f_name = $request->input('f_name');
        $users->m_name = $request->input('m_name');
        $users->office = $request->input('office');
        $users->position = $request->input('position');
        $users->username = $request->input('username');
        $users->password = $request->input('password');
        $users->save();
        return redirect('/')->with('response', 'Register Successful');         
    }
}
