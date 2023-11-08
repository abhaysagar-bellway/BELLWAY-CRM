<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $role = Role::where('id', '!=', 1)->get();
        return view('admin.profile',array('role' => $role));
    }
}
