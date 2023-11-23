<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {      
        $role = Role::where('id', '!=', 1)->get();
        $user = Auth::user();
        return view('admin.profile',array('role' => $role,'user' => $user));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('admin.editprofile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user(); 
        $request->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'mobile_number' => 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'profile_photo_path' => '',
            
        ]);
        $input = $request->all();
         if (request()->hasFile('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            $destinationPath = 'uploads';
            $name =  $file->getClientOriginalName();
            $file->move($destinationPath, $name);
            $input['profile_photo_path'] = $name;    
        }
        $user->update($input);
       
        // $user->save();

        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully!');
    }

}
