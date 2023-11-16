<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
//     protected $table = 'leads'; // Specify the correct table name
//     protected $fillable = ['count']; // Add other columns as needed
  protected $fillable = ['data', 'borderColor', 'fill'];
}
