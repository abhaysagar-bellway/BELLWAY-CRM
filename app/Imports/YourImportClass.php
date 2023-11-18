<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Inquiry; // Assuming your model is Inquiry

class YourImportClass implements ToModel
{
    public function model(array $row)
    {
        // Ensure columns are mapped correctly to your database columns
        return new Inquiry([
            'company_name' => $row[0],
            'city' => $row[1],
            'contact_number' => $row[2],
            'domain' => $row[3],
            'email' => $row[4],
            'sector' => $row[5],
            'alternativenumber' => $row[6],
            'enquirydate' => $row[7], // Ensure it's in the right format (e.g., 'Y-m-d')
            'alternativeemail' => $row[8],
            'publicity_medium' => $row[9],
            'address' => $row[10],
            'customer_answere' => $row[11],
            'state' => $row[12],
            'remarks' => $row[13],
            // Add other columns as needed
        ]);
    }
}
