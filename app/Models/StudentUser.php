<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    use HasFactory;
    public $fillable = [
        'student_name',
        'student_number',
        'phone',
        'email',
        'final_fixed_average',
        'final_removable_average'


    ];

}
