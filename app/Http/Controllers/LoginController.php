<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

class LoginController extends Controller
{
    public function AdminLogin()
    {
    //    $name = Cookie::get('name');
       $email = Cookie::get('email');
       $password = Cookie::get('password');
       $cookieData = array('email' => $email, 'password' => $password);
        return view('admin.login',array('cookieData' => $cookieData));
        
    }

    public function login(Request $request)
    {
 
        // print_r($request->all());
        $request->validate(
            [                // 'name' =>  'string|required|min:4|max:10',
                'email' => 'required|email',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/' 
            ]
            );
            $credentials = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
           
            if($credentials){
                $credentials = $request->only('email', 'password');

          

            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');

                            //set cookies click on remember
                            if(isset($cookieData['checkbox']) && !empty($cookieData['checkbox'])){
                                setcookie("email",$cookieData['email'],time()+3600);
                                // setcookie("name",$cookieData['name'],time()+3600);
                                setcookie("password",$cookieData['password'],time()+3600);
                                setcookie("remember_me",1,time()+3600);
                            }
                            else{
                                setcookie('email',"");
                                // setcookie('name',"");
                                setcookie('password',"");
                                setcookie('remember_me',"");
                            }
            }
               
             
        }        
             else {
               return redirect()->back()->with('error','Invalid Login details');
            }
             return redirect("/admin")->withSuccess('Login details are not valid');
    
    }

    public function Employee()
    {
    //    $name = Cookie::get('name');
       $EmployeeEmail = Cookie::get('email');
       $Employeepassword = Cookie::get('password');
       $cookieData = array('email' =>$EmployeeEmail, 'password' => $Employeepassword);
        return view('admin.EmployeeLogin',array('cookieData' => $cookieData));
        
    }


    public function EmployeeLogin(Request $request)
    {
 
        // print_r($request->all());
        $validation =  $request->validate(
            [            
                
                'email' => 'required|email',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/' 
            ]
            );
            $credentials = Auth::attempt(['email' =>  $validation[$request->email], 'password' =>  $validation[$request->password]]);
           
            if($credentials){
                $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');

                            //set cookies click on remember
                            if(isset($cookieData['checkbox']) && !empty($cookieData['checkbox'])){
                                setcookie("email",$cookieData['email'],time()+3600);
                                // setcookie("name",$cookieData['name'],time()+3600);
                                setcookie("password",$cookieData['password'],time()+3600);
                                setcookie("remember_me",1,time()+3600);
                            }
                            else{
                                setcookie('email',"");
                                // setcookie('name',"");
                                setcookie('password',"");
                                setcookie('remember_me',"");
                            }
            }
          
            else
              {
               return redirect()->back()->with('error','Invalid Login details');
            }
            }
             
             return redirect("/")->withSuccess('Employee Your Login details are not valid');
    
    }
    
}
