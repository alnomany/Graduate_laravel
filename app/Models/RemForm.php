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

        'rm7',
        'rm7_sig',
        'rm7_date',

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
    public static $rules = [
        'student_number' => 'required|in:["00-65656565","01-437201130","02-438200126","03-438200128","04-438200149","05-438200243","06-438200279","07-438200335","08-438200403","09-438200420","10-438200456","11-438200571","12-438200611","13-438200712","14-438200897","15-438200923","16-438200948","17-438201205","18-438201208","19-438201270","20-438201271","21-438201347","22-438201407","23-438201418","24-438201444","25-438201456","26-438201515","27-438201523","28-438201540","29-438201541","30-438201663","31-438201740","32-438201767","33-438201958","34-438201999","35-438202005","36-438202007","37-438202052","38-438202307","39-438202335","40-438202446","41-438202518","42-438202561","43-438202617","44-438202640","45-438202666","46-438202712","47-438202724","48-438202737","49-438202868","50-438202871","51-438202874","52-438203351","53-438204370"]',

        'p_name' => 'required',
        'p_rn' => 'required',

        'rm1' => 'nullable|numeric|min:0|max:10',
        'rm2' =>'nullable|numeric|min:0|max:10',
        'rm3' => 'nullable|numeric|min:0|max:10',
        'rm4' => 'nullable|numeric|min:0|max:10',
        'rm5' => 'nullable|numeric|min:0|max:10',
        'rm6' => 'nullable|numeric|min:0|max:10',
        'rm7' => 'nullable|numeric|min:0|max:10',
        'rm8' => 'nullable|numeric|min:0|max:10',
        'rm9' =>'nullable|numeric|min:0|max:10',
        'rm10' => 'nullable|numeric|min:0|max:10',
        'rm11' => 'nullable|numeric|min:0|max:10',
        'rm12' => 'nullable|numeric|min:0|max:10',
        'rm13' => 'nullable|numeric|min:0|max:10',


    ];

}
