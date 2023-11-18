<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
  protected $table = 'inquiry';
  protected $fillable = [
    'company_name',
    'city',
    'contact_number',
    'domain',
    'email',
    'sector',
    'alternativenumber',
    'enquirydate',
    'alternativeemail',
    'publicity_medium',
    'address',
    'customer_answere',
    'state',
    'remarks',
  ];

 
}