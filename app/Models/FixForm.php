<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'fm2',
        'fm2_sig',
        'fm3',
        'fm3_sig',
        'fm4',
        'fm4_sig',
        'fm5',
        'fm5_sig',
        'fm6',
        'fm6_sig',
        'avg',
        'note',
        'total_avg',
        'status',
        'fm0',
        'fm0_sig',

    ];

    /**
     * The attributes that should mkjbe casted to native types.
     *
     * @var array
     */

}
