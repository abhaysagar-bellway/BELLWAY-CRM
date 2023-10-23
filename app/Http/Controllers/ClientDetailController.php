<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDetailController extends Controller
{
    public function ClientDetail(){
        return view('admin.ClientDetail');
    }
}
