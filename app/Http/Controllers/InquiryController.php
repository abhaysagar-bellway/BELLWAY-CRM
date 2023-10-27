<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inquiry;

class InquiryController extends Controller
{
    public function Searchinquiry(){
        
        return view('admin.Searchinquiry');
    }
    public function searchInquiryData(Request $request){
        dd($request->all());
    }

    public function Addinquiry(){
        $inquiryData = Inquiry::all();
        
        
        return view('admin.Addinquiry',array('inquiryData'=>$inquiryData));
    }

    public function saveInquiryData(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->company_name = $request->input('company_name');
        $inquiry->city = $request->input('city');
        $inquiry->contact_number = $request->input('contact_number');
        $inquiry->domain = $request->input('domain');
        $inquiry->email = $request->input('email');
        $inquiry->sector = $request->input('sector');
        $inquiry->alternativenumber = $request->input('alternativenumber');
        $inquiry->enquirydate = $request->input('enquirydate');
        $inquiry->alternativeemail = $request->input('alternativeemail');
        $inquiry->publicity_medium = $request->input('publicity_medium');
        $inquiry->address = $request->input('address');
        $inquiry->customer_answere = $request->input('customer_answere');
        $inquiry->state = $request->input('state');
        $inquiry->remarks = $request->input('remarks');
        $inquiry->save();
        return redirect()->back()->with('status',"Your Enquiry Added Successfully!");
    }

    public function Newinquiry(){
        return view('admin.Newinquiry');
    }
   
   
  


}
