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
    public static $rules = [
        'student_number' => 'required|in:["00-677676676","01-437201130","02-438200126","03-438200128","04-438200149","05-438200243","06-438200279","07-438200335","08-438200403","09-438200420","10-438200456","11-438200571","12-438200611","13-438200712","14-438200897","15-438200923","16-438200948","17-438201205","18-438201208","19-438201270","20-438201271","21-438201347","22-438201407","23-438201418","24-438201444","25-438201456","26-438201515","27-438201523","28-438201540","29-438201541","30-438201663","31-438201740","32-438201767","33-438201958","34-438201999","35-438202005","36-438202007","37-438202052","38-438202307","39-438202335","40-438202446","41-438202518","42-438202561","43-438202617","44-438202640","45-438202666","46-438202712","47-438202724","48-438202737","49-438202868","50-438202871","51-438202874","52-438203351","53-438204370"]',

        'p_name' => 'required',
        'p_rn' => 'required',

        'tooth_number' => 'required|in:11,12,13,14,15,16,17,18,21,22,23,24,25,26,27,28,31,32,33,34,35,36,37,38,41,42,43,44,45,46,47,48',
        'rest_type' => 'required|in:FPD,Crwn,Post&core,Onlay,Inlay,Veneer',


     
        'fm0' => 'nullable|numeric|min:0|max:10',
        'fm1' => 'nullable|numeric|min:0|max:10',
        'fm2' =>'nullable|numeric|min:0|max:10',
        'fm3' => 'nullable|numeric|min:0|max:10',
        'fm4' => 'nullable|numeric|min:0|max:10',
        'fm5' => 'nullable|numeric|min:0|max:10',
        'fm6' => 'nullable|numeric|min:0|max:10',   
     ];

    /**
     * The attributes that should mkjbe casted to native types.
     *
     * @var array
     */



}
