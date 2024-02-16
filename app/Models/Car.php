<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
//új auto létrehozásához
    protected $fillable = [
        "license_plate_number",
        "brand",
        "model",
        "year_of_manufacture",
        "fuel_type",
    ];
    //id automatikusan generálódik 
}
