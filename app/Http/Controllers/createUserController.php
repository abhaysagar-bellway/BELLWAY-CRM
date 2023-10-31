<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;

class createUserController extends Controller
{
    public function createUser()
    {
        $employeeData = Employee::all();
        return view('admin.createUser',array('employeeData' => $employeeData));

    }
    
    public function employee(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'role' => 'required',
            'number' => 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
              'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,8}$/ix',
              'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
              'upload_image' => 'required|mimes:png,jpg,jpeg|max:2048'
         ]);



        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->role = $request->role;
        $employee->number = $request->number;
        $employee->email = $request->email;
        $employee->password =bcrypt($request->password);
        // $employee->upload_image = $request->upload_image;
       

        if (request()->hasFile('upload_image')){
            $file = $request->file('upload_image');
           $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
            $employee->upload_image = $file->getClientOriginalName();
        }
        $employee->save();
        return redirect()->back()->with('status','Employee Data Add Successfully!');


         
    }

    public function role(){
        $role = Role::all();
        return view('admin.role',array('role' => $role));
    }

    public function addrole(Request $request)
    {
        $validatedData = $request->validate([
            'rolename' => 'required|min:4',
            'checkbox' => 'required',
         ]);

         $role = new Role;
         $role->rolename = $request->rolename;   
         $role->checkbox =  implode(" ,",$request->checkbox);
         
         
         $role->save();
         return redirect()->back()->with('status','Role Data Add Successfully!');

    }
    
       
}
