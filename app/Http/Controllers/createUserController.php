<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class createUserController extends Controller
{
    public function createUser()
    {
        $userData =  User::where('role_id', '!=', 1)->get();  
        $role = Role::where('id', '!=', 1)->get();
        return view('admin.createUser',array('userData' => $userData,'role' => $role));

    }
  
    public function User(Request $request)
    {
       
       
      $validatedData = $request->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20|unique:users',
            'role_id' => 'required',
            'mobile_number' => 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
            'email' =>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,8}$/ix',
            'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'profile_photo_path' => 'required|mimes:png,jpg,jpeg|max:2048',
         ]);
      
        $User = new User;
        $User->first_name = $request->first_name;
        $User->last_name = $request->last_name;
        $User->role_id = $request->role_id;
        $User->mobile_number = $request->mobile_number;
        $User->email = $request->email;
        $User->password =bcrypt($request->password);
        // $User->profile_photo_path = $request->profile_photo_path;
      
        if (request()->hasFile('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
            $User->profile_photo_path = $file->getClientOriginalName();    
        }
        // if ($request->hasFile('profile_photo_path')) {
        //     $Path = $request->file('profile_photo_path')->store('profile_photos', 'public');
        //     $destinationPath = 'uploads';
        //     $file->move($destinationPath, $file->getClientOriginalName());
        //     $User->profile_photo_path = $file->getClientOriginalName();
            
        // }
       
        $User->save();
        return redirect()->back()->with('status','User Data Add Successfully!');


         
    }

    
       
}
