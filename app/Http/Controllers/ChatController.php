<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ChatController extends Controller
{
    public function chat()
    {
        $employeeData = Employee::all();
        return view('admin.Chat',array('employeeData' => $employeeData));
    }
}
