<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createUserController extends Controller
{
    public function createUser()
    {
        return view('admin.createUser');
    }
}
