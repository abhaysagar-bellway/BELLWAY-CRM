<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inquiry;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InquiryController extends Controller
{
    public function Searchinquiry(){
        $user = User::where('role_id', '!=', 1)->get();
        $assigningData = User::where('role_id',1)->get();
        return view('admin.Searchinquiry',array('user' => $user,'assigningData' => $assigningData));
    }
    public function searchInquiryData(Request $request){
        // dd($request->all());
    }

    public function Addinquiry(){
        $inquiryData = Inquiry::all();
       return view('admin.Addinquiry',array('inquiryData'=>$inquiryData));
    }

    public function saveInquiryData(Request $request)
    {       
      

        
        $validatedData = $request->validate([
            
            'company_name' => 'required|regex:/^[A-Za-z\s]+$/',
            'city' => 'required|regex:/^[A-Za-z\s]+$/',
            'contact_number' => 'required|regex:/^\d+$/',
            'domain' => 'required|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email', // Use Laravel's built-in email validation
            'sector' => 'required|regex:/^[A-Za-z\s]+$/',
            'alternativenumber' =>'required|regex:/^\d+$/',
            'enquirydate' => 'required',
            'alternativeemail' => 'required|email', // Use Laravel's built-in email validation
            'publicity_medium' => 'required|regex:/^[A-Za-z\s]+$/',
            'address' => 'required',
            'customer_answere' => 'required',
            'state' => 'required',
            'remarks' => 'required',
                  ]);      

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
        return redirect()->back()->with('error','Failed to add the inquiry. Please check your input and try again!');
        
    }

    public function Newinquiry(){
        return view('admin.Newinquiry');
    }
   
   
  


}
