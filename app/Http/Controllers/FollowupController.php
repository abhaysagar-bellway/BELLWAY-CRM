<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowupController extends Controller
{
    public function pendingFollowup(){
        return view('admin.PendingFollowup');
    }
    public function doneFollowup(){
        return view('admin.DoneFollowup');
    }
}
