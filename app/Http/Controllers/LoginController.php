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

      
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
    
        $credentials = $request->only('email', 'password');
       
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            if (Auth::check()) {
                $user = Auth::user();
                // dd($user->role_id);
                if ($user->role_id == 1) {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->back()->with('error', 'Unauthorized access');
                }
            }
              dd(Auth::check(), Auth::user());
            
            if ($User->role_id === 1) {
               
                // Redirect to admin dashboard
                if (isset($cookieData['checkbox']) && !empty($cookieData['checkbox'])) {
                    // Handle cookie setting here
                    setcookie("email", $cookieData['email'], time() + 3600);
                    setcookie("password", $cookieData['password'], time() + 3600);
                    setcookie("remember_me", 1, time() + 3600);
                } else {
                    setcookie('email', "");
                    setcookie('password', "");
                    setcookie('remember_me', "");
                }
                return redirect()->route('admin.dashboard');
            } else {
                // Redirect to user dashboard or show an error
                return redirect('/admin')->back()->with('error', 'Unauthorized access');
            }
        } else {
            // Invalid credentials, redirect back with error message
            return redirect()->back()->with('error', 'Invalid login details');
        }
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
        $validation =  $request->validate([            
               'email' => 'required|email',
                'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/' 
            ]);

           
          
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    if (Auth::check()) {
                        $user = Auth::user();
                        // dd($user->role_id);
                        if ($user->role_id == 1) {
                            return redirect()->back()->with('error', 'Unauthorized access');
                        } else {
                            return redirect()->intended('dashboard')->withSuccess('Signed in');
                        }
                    }
                    // Check if user is an admin
                    
                    // Redirect to dashboard for employees
                    return redirect()->intended('dashboard')->withSuccess('Signed in');
                
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
            
             
             return redirect("/")->withSuccess('Employee Your Login details are not valid');
    
    }
    
}


