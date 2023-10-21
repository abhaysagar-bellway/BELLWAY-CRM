<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function Searchinquiry(){
        return view('admin.Searchinquiry');
    }
    public function Addinquiry(){
        return view('admin.Addinquiry');
    }

    public function Newinquiry(){
        return view('admin.Newinquiry');
    }
   
   
  


}
