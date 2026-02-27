<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        "name",
        "nisn",
        "address",
        "date_of_birth",
        "gender"
    ];
}
