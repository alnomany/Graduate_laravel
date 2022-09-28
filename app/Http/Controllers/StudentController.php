<?php

namespace App\Http\Controllers;

use App\Models\FixForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function ImportExcelStudent(){
        return view('students.index');

    }
    public function view(){
       $record= DB::table('fix_forms')->where("student_number","01-437201130")->distinct()->get();
       $student_user= DB::table('student_users')->where("student_number","01-437201130")->first();
       $Fixed_Total_Procedures_Mark= DB::table('fix_forms')->where("student_number","01-437201130")->sum("fm0","fm1","fm2","fm3","fm4","fm5","fm6");
       $Fixed_Total_Procedures_Count= DB::table('fix_forms')->where("student_number","01-437201130")->count("fm0","fm1","fm2","fm3","fm4","fm5","fm6");


         return view('students.student-view',compact('student_user','record','Fixed_Total_Procedures_Mark','Fixed_Total_Procedures_Count'));

    }
}
