<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $Laptop = Product::where('product_type','Laptop')->get();
        // $Phone = Product::where('product_type','Phone')->get();
        // $Desktop = Product::where('product_type','Desktop')->get();
        // $laptop_count = count($Laptop);
        // $phone_count = count($Phone);
        // $desktop_count = count($Desktop);
        // return view('barchart',compact('laptop_count','phone_count','desktop_count'));
        // return view('admin.dashboard',compact('laptop_count','phone_count','desktop_count'));
        $todo = Todo::all();

        return view('admin.dashboard', compact('todo'));
    }

    public function addTodo(Request $request)
    {
        $todo = new Todo();
        $todo->todo = $request['todo'];
        $todo->save();
        return back()->with(['data' => $todo]);
    }
}
