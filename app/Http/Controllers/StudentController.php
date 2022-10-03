<?php

namespace App\Http\Controllers;

use App\Models\FixForm;
use App\Models\RemForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function ImportExcelStudent(){
        return view('students.index');

    }
    public function view(){
       $record= FixForm::where("student_number","01-437201130")->get();
       $student_user= DB::table('student_users')->where("student_number","01-437201130")->first();
       $Fixed_Total_Procedures_Mark= DB::table('fix_forms')->where("student_number","01-437201130")->get(
        array(

          DB::raw('SUM(fm0) as sumfm0'),
          DB::raw('SUM(fm1) as sumfm1'),
          DB::raw('SUM(fm2) as sumfm2'),
          DB::raw('SUM(fm3) as sumfm3'),
          DB::raw('SUM(fm4) as sumfm4'),
          DB::raw('SUM(fm5) as sumfm5'),
          DB::raw('SUM(fm6) as sumfm6')
        )
      );
      $rest_types = DB::table('fix_forms')
    ->selectRaw('count(*) as count, rest_type')
    ->where('student_number', '=', "01-437201130")
    ->groupBy('rest_type')
    ->orderByDesc('count')
    ->get();
      $Removable_Treatment_Data= DB::table('fix_forms')->select('rest_type')->where("student_number","01-437201130")->get();
      $consumers = collect($Removable_Treatment_Data);

       $attendance = $Removable_Treatment_Data->where('rest_type', 'Crwn')->count();

   // $attendance->count();
      $Removable_Treatment_Data= DB::table('fix_forms')->where("student_number","01-437201130")->get();
      $FTPM=$Fixed_Total_Procedures_Mark->toArray();
      $FTPM=$FTPM[0]->sumfm0+$FTPM[0]->sumfm1+$FTPM[0]->sumfm2+$FTPM[0]->sumfm3+$FTPM[0]->sumfm4+$FTPM[0]->sumfm5+$FTPM[0]->sumfm6;
     //sum(DB::raw('fm0+fm1+fm2+fm3+fm4+fm5+fm6'));




       $Fixed_Total_Procedures_Count= DB::table('fix_forms')->where("student_number","01-437201130")->count("fm0","fm1","fm2","fm3","fm4","fm5","fm6");
       $Fixed_Total_Procedures_Mark_update= DB::table('fix_forms')->where("student_number","01-437201130")->get(
        array(

          DB::raw('count(fm0) as sumfm0'),
          DB::raw('count(fm1) as sumfm1'),
          DB::raw('count(fm2) as sumfm2'),
          DB::raw('count(fm3) as sumfm3'),
          DB::raw('count(fm4) as sumfm4'),
          DB::raw('count(fm5) as sumfm5'),
          DB::raw('count(fm6) as sumfm6')
        )
      );
      $FTPC=$Fixed_Total_Procedures_Mark_update->toArray();
      $FTPC=$FTPC[0]->sumfm0+$FTPC[0]->sumfm1+$FTPC[0]->sumfm2+$FTPC[0]->sumfm3+$FTPC[0]->sumfm4+$FTPC[0]->sumfm5+$FTPC[0]->sumfm6;

        $Fixed_Total_Student_Patients=DB::table('fix_forms')->where("student_number","01-437201130")->distinct()->count("p_rn");


         return view('students.student-view',compact('student_user','record','FTPM','FTPC','Fixed_Total_Procedures_Count','Fixed_Total_Student_Patients','Fixed_Total_Student_Patients','rest_types'));

    }
    public function rem(){
        $record= RemForm::where("student_number","01-437201130")->get();
        $student_user= DB::table('student_users')->where("student_number","01-437201130")->first();
        $Fixed_Total_Procedures_Mark= DB::table('rem_forms')->where("student_number","01-437201130")->get(
         array(

           DB::raw('SUM(rm7) as sumfm7'),
           DB::raw('SUM(rm1) as sumfm1'),
           DB::raw('SUM(rm2) as sumfm2'),
           DB::raw('SUM(rm3) as sumfm3'),
           DB::raw('SUM(rm4) as sumfm4'),
           DB::raw('SUM(rm5) as sumfm5'),
           DB::raw('SUM(rm6) as sumfm6')
         )
       );
       $rest_types = DB::table('rem_forms')
     ->selectRaw('count(*) as count, arch_type')
     ->where('student_number', '=', "01-437201130")
     ->groupBy('arch_type')
     ->orderByDesc('count')
     ->get();
       $Removable_Treatment_Data= DB::table('rem_forms')->select('arch_type')->where("student_number","01-437201130")->get();
       $consumers = collect($Removable_Treatment_Data);


    // $attendance->count();
       $Removable_Treatment_Data= DB::table('rem_forms')->where("student_number","01-437201130")->get();
       $FTPM=$Fixed_Total_Procedures_Mark->toArray();
       $FTPM=$FTPM[0]->sumfm7+$FTPM[0]->sumfm1+$FTPM[0]->sumfm2+$FTPM[0]->sumfm3+$FTPM[0]->sumfm4+$FTPM[0]->sumfm5+$FTPM[0]->sumfm6;
      //sum(DB::raw('fm0+fm1+fm2+fm3+fm4+fm5+fm6'));




        $Fixed_Total_Procedures_Count= DB::table('rem_forms')->where("student_number","01-437201130")->count("rm1","rm2","rm3","rm4","rm5","rm6");
        $Fixed_Total_Procedures_Mark_update= DB::table('rem_forms')->where("student_number","01-437201130")->get(
         array(

           DB::raw('count(rm7) as sumfm7'),
           DB::raw('count(rm1) as sumfm1'),
           DB::raw('count(rm2) as sumfm2'),
           DB::raw('count(rm3) as sumfm3'),
           DB::raw('count(rm4) as sumfm4'),
           DB::raw('count(rm5) as sumfm5'),
           DB::raw('count(rm6) as sumfm6')
         )
       );
       $FTPC=$Fixed_Total_Procedures_Mark_update->toArray();
       $FTPC=$FTPC[0]->sumfm7+$FTPC[0]->sumfm1+$FTPC[0]->sumfm2+$FTPC[0]->sumfm3+$FTPC[0]->sumfm4+$FTPC[0]->sumfm5+$FTPC[0]->sumfm6;

         $Fixed_Total_Student_Patients=DB::table('rem_forms')->where("student_number","01-437201130")->distinct()->count("p_rn");


          return view('students.student-view-rem',compact('student_user','record','FTPM','FTPC','Fixed_Total_Procedures_Count','Fixed_Total_Student_Patients','Fixed_Total_Student_Patients','rest_types'));

     }
}
