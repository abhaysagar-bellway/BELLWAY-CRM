<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    public function chat()
    {
        // $employeeData = Employee::all();
        return view('admin.Chat');
    }
}
