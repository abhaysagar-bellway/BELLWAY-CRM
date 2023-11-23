<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function role(){
        $user = User::find(1);
        $role = Role::where('id', '!=', 1)->get();
        $userData =  User::where('role_id', '!=', 1)->get(); 
        $data = DB::table('users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.first_name','users.last_name', 'roles.rolename', 'roles.role_permission','roles.id')
        ->get();

        return view('admin.role',array('role' => $role, 'data' => $data))->with('user', $user);
    }

    public function addrole(Request $request)
    {
        $validatedData = $request->validate([
            'rolename' => 'required',
            'role_permission ' => 'required',
         ]);

         $role = new Role;
         $role->rolename = $request->rolename; 
         $User = new User;
         $User->first_name = $request->first_name;
         $User->last_name = $request->last_name;
         $role->role_permission =  implode(" ,",$request->role_permission);
         $role->save();
         return redirect()->back()->with('status','Role Data Add Successfully!');

    }
   
}
