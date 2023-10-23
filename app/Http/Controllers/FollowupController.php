<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowupController extends Controller
{
    public function pendingFollowup(){
        return view('admin.Followup');
    }
    public function doneFollowup(){
        return view('admin.Followup');
    }
}
