<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // print_r($request->all());
        $request->validate(
            [
                'name' =>  'required',
                'email' => 'required|email',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/' 
            ]
            );
                
         $credentials = $request->only('name','email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('login')
                        ->withSuccess('Signed in');
        }else{
            
            return redirect("/")->withSuccess('Login details are not valid');
         
        }
  
           
    }


}
