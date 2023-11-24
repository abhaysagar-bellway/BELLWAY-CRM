<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\YourModel;
use App\Imports\YourImportClass; 
use Illuminate\Validation\ValidationException;

class InquiryController extends Controller
{
    public function Searchinquiry(){
        $user = User::all(); 
        $user = Auth::user();
        $user = User::find(1);
        $user = User::where('role_id', '!=', 1)->get();
        $assigningData = User::where('role_id',1)->get();
        return view('admin.Searchinquiry',array('user' => $user,'assigningData' => $assigningData))->with('user', $user);
    }
    public function searchInquiryData(Request $request){
        $user = User::all(); 
        $user = auth()->user();
        $user = User::find(1);
        $query = $request->input('start_date'); 

        $results = YourModel::where('column_name', 'like', '%' . $query . '%')->get();
        // Replace 'column_name' with the actual column in your table you want to search

        return view('search_results', ['results' => $results],array('user' => $user))->with('user', $user);
    }
    
    public function downloadSampleFile()
    {
       
        $filePath = public_path('sample-file/sample-file.xlsx');

          // Check if the file exists
    if (!file_exists($filePath)) {
        return "The file does not exist at the specified location.";
    }

    // Load the Excel file
    $spreadsheet = IOFactory::load($filePath);

    // Set headers for the response
    $headers = [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'Content-Disposition' => 'attachment; filename="sample-file.xlsx"',
    ];

    // Output the file to the browser for download
    ob_end_clean(); // Clean output buffer
    return response()->streamDownload(
        function () use ($spreadsheet) {
            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $writer->save('php://output');
        },
        'sample-file.xlsx',
        $headers
    );
       
       
    }
    public function Addinquiry(){
        $user = User::all(); 
        $user = auth()->user();
        $user = User::find(1); 
        $inquiryData = Inquiry::all();
       return view('admin.Addinquiry',array('inquiryData'=>$inquiryData))->with('user', $user);
    }

    public function saveInquiryData(Request $request)
    {       
        $user = auth()->user();
        $validatedData = $request->validate([
            
            'company_name' => 'required|regex:/^[A-Za-z\s]+$/',
            'city' => 'required|regex:/^[A-Za-z\s]+$/',
            'contact_number' => 'required|regex:/^\d+$/',
            'domain' => 'required|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email', 
            'sector' => 'required|regex:/^[A-Za-z\s]+$/',
            'alternativenumber' =>'required|regex:/^\d+$/',
            'enquirydate' => 'required',
            'alternativeemail' => 'required|email', 
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
        $user = User::all(); 
        $user = auth()->user();
        $user = User::find(1);
        return view('admin.Newinquiry')->with('user', $user);
    }

    
    public function upload(Request $request)
    {
        if ($request->hasFile('excel_file')) {
            $file = $request->file('excel_file');
            $filePath = $file->storeAs('uploads', $file->getClientOriginalName());
    
            // Import data from Excel to database
            $data = Excel::toCollection(new YourImportClass(), $file);
    
            $errorMessages = [];
            $success = true;
    
            foreach ($data[0] as $rowIndex => $row) {
                // Validate required fields and handle errors
                if (!$this->validateRequiredFields($row)) {
                    // $errorMessages[] = "Row {$rowIndex}: Required fields are missing.";
                    $errorMessages[] = "";
                    
                    $success = false;
                    continue;
                }
    
                // Validate and format date if exists
                if ($row[7] !== null) {
                    $enquiryDate = $this->parseDate($row[7]);

                    if ($enquiryDate === null) {
                        $errorMessages[] = "";
                        $success = false;
                        continue;
                    }
                    $formattedDate = $enquiryDate->format('Y-m-d');
                } else {
                    $formattedDate = null;
                }
    
                // Save to the database
                try {
                    Inquiry::create([
                        // Adjust these fields based on your actual column mappings
                        'company_name' => $row[0],
                        'city' => $row[1],
                        'contact_number' => $row[2],
                        'domain' => $row[3],
                        'email' => $row[4],
                        'sector' => $row[5],
                        'alternativenumber' => $row[6],
                        'enquirydate' => $formattedDate,
                        'alternativeemail' => $row[8],
                        'publicity_medium' => $row[9],
                        'address' => $row[10],
                        'customer_answere' => $row[11],
                        'state' => $row[12],
                        'remarks' => $row[13],
                    ]);
                } catch (\Exception $e) {
                    $errorMessages[] = "Row {$rowIndex}: Error saving data to the database.";
                    $success = false;
                }
            }
    
            if (!$success) {
                $errorMessage = implode('', $errorMessages);
                return redirect()->back()->with('error', $errorMessage);
            }
    
            return redirect()->back()->with('status', 'File uploaded and data stored.');
        }
    
        return redirect()->back()->with('error', 'No file was uploaded.');
    }
    
    private function validateRequiredFields($row)
{
    // Define required fields based on your actual data structure
    $requiredColumns = [0, 1, 7]; // Assuming columns 0, 1, and 7 are required; adjust as needed

    foreach ($requiredColumns as $column) {
        if (empty($row[$column])) {
            return false; // Return false immediately if any required field is empty
        }
    }

    return true; // Return true if all required fields are present
}
    
    private function parseDate($dateString)
    {
        try {
            // Attempt to parse the date string with different formats
            $formatsToTry = ['d-m-Y', 'Y-m-d', 'Y/m/d', 'd/m/Y', 'm/d/Y', 'Y-m-d H:i:s']; // Add more formats if needed
    
            foreach ($formatsToTry as $format) {
                $date = Carbon::createFromFormat($format, $dateString);
                if ($date !== false) {
                    return $date;
                }
            }
    
            // If none of the formats matched, return null or handle accordingly
            return null;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            error_log("Error parsing date: {$dateString}. Error: {$e->getMessage()}");
    
            // Return null or handle the error as needed
            return null;
        }
    }
    
}
