<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory , SoftDeletes;

    protected $filable = 
    [
        "name"   ,     
        "ratio",
        "father",
        "father_job",
        "mother",
        "place_and_number_of_registration",
        "place_of_birth",
        "place_Get_the_certificate",
        "total",
        "religion",       
        "city" ,
        // "gender",        
        // "language",
        // "exam_session",
        // "teacher",
        "family",
        "recruitment_division",
        "national_number",
        "date_of_birth",
        "mobile_phone_number",
        "landline_number",
        "detailed_address",
        "date_of_registration", 
   
    ];
}
