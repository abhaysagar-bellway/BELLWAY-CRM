<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowupController extends Controller
{
    
    public function pendingFollowup(){
        $user = User::all(); 
        return view('admin.PendingFollowup')->with('user', $user);
    }
    public function doneFollowup(){
        $user = User::all(); 
        return view('admin.DoneFollowup')->with('user', $user);
    }
}
