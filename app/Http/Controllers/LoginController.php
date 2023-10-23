<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie; 
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function AdminLogin()
    {
       $name = Cookie::get('name');
       $email = Cookie::get('email');
       $password = Cookie::get('password');
       $cookieData = array('name' => $name,'email' => $email, 'password' => $password);
        return view('admin.login',array('cookieData' => $cookieData));
        
    }

    public function login(Request $request)
    {
        // print_r($request->all());
        $request->validate(
            [
                'name' =>  'string|required|min:4|max:10',
                'email' => 'required|email',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/' 
            ]
            );
                
            $credentials = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'name' => $request->name ]);
            if($credentials){
                $credentials = $request->only('name','email', 'password');

          

            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');

                            //set cookies click on remember
                            if(isset($cookieData['checkbox']) && !empty($cookieData['checkbox'])){
                                setcookie("email",$cookieData['email'],time()+3600);
                                setcookie("name",$cookieData['name'],time()+3600);
                                setcookie("password",$cookieData['password'],time()+3600);
                                setcookie("remember_me",1,time()+3600);
                            }
                            else{
                                setcookie('email',"");
                                setcookie('name',"");
                                setcookie('password',"");
                                setcookie('remember_me',"");
                            }
            }
            } else {
               return redirect()->back()->with('error','Invalid Login details');
            }
             return redirect("/")->withSuccess('Login details are not valid');
    
    }


}
