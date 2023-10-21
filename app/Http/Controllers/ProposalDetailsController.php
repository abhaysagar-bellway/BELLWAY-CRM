<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalDetailsController extends Controller
{
    public function proposaldetails(){
        return view('admin.Proposaldetails');
    }
}
