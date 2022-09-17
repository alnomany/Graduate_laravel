<?php

namespace App\Models;

use App\Mail\NoteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FixForm extends Model
{
    use HasFactory;

    public $fillable = [
        'student_number',
        'student_name',
        'p_name',
        'p_rn',
        'rest_type',
        'tooth_number',
        'fm1',
        'fm1_sig',
        'fm1_date',
        'fm2',
        'fm2_sig',
        'fm2_date',

        'fm3',
        'fm3_sig',
        'fm3_date',

        'fm4',
        'fm4_sig',
        'fm4_date',

        'fm5',
        'fm5_sig',
        'fm5_date',

        'fm6',
        'fm6_sig',
        'fm6_date',

        'avg',
        'note',
        'total_avg',
        'status',
        'fm0',
        'fm0_sig',
        'fm0_date',


    ];

    /**
     * The attributes that should mkjbe casted to native types.
     *
     * @var array
     */



}
