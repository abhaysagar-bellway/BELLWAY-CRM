<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    public function chat()
    {
        $user = User::all(); 
        // $employeeData = Employee::all();
        return view('admin.Chat')->with('user', $user);
    }
}
