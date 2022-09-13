<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemForm extends Model
{
    use HasFactory;
    public $fillable = [
        'student_number',
        'student_name',
        'p_name',
        'p_rn',
        'arch_type',
        'tooth_number',

        'rm0',
        'rm0_sig',
        'rm0_date',

        'rm1',
        'rm1_sig',
        'rm1_date',

        'rm2',
        'rm2_sig',
        'rm2_date',

        'rm3',
        'rm3_sig',
        'rm3_date',

        'rm4',
        'rm4_sig',
        'rm4_date',

        'rm5',
        'rm5_sig',
        'rm5_date',

        'rm6',
        'rm6_sig',
        'rm6_date',

        'rm8',
        'rm8_sig',
        'rm8_date',

        'rm8',
        'rm8_sig',
        'rm8_date',

        'rm9',
        'rm9_sig',
        'rm9_date',

        'rm9',
        'rm9_sig',
        'rm9_date',

        'rm10',
        'rm10_sig',
        'rm10_date',

        'rm11',
        'rm11_sig',
        'rm11_date',

        'rm12',
        'rm12_sig',
        'rm12_date',

        'rm13',
        'rm13_sig',
        'rm13_date',

        'avg',
        'note',
        'total_avg',
        'status',



    ];

}
