<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Role;

class LogoutController extends Controller
{
    public function logout()
    {
        // Check if the user is authenticated before attempting to access properties
        if (Auth::check()) {
            $user = Auth::user();
            
            // Logout the user
            Auth::logout();
    
            // Flush the session
            Session::flush();
    
            // Check the role and redirect accordingly
            if ($user->role_id == 1) {
                return redirect()->route('admin.submit');
            } else {
                return redirect()->route('employee.login');
            }
        }
        dd(Auth::check(), Auth::user());
        // Redirect to a default route if the user is not authenticated
        return redirect('/');
    }
    


}

