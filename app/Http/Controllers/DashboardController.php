<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = User::all(); 
        $user = User::find(1);
        $todo = Todo::all();
        return view('admin.dashboard', compact('todo'))->with('user', $user);
    }

    public function addTodo(Request $request)
    {
        $todo = new Todo();
        $todo->todo = $request['todo'];
        $todo->save();
        return back()->with(['data' => $todo]);
    }
}
