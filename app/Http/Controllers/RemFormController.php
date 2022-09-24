<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\NoteMail;
use App\Models\FixForm;

use App\Models\RemForm;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Exports\RemFormExport;
use Illuminate\Support\Facades\DB;
use App\Exports\RemFormExportSingle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreRemFormRequest;

class RemFormController extends Controller
{
    //
    public function create(){
        $words = explode(" ",  Auth::user()->name);
        $name = "";
        foreach ($words as $w) {
          $name .= mb_substr($w, 0, 3);
        }
        if(Auth::user()->type == "admin")
        {
            $name ="Admin1";
        }








        $arr_rest_type = ['MAX CD','MAX CONV RPD',
        'MAX TD','MAX OD W/COPING','MAX OD NO/COPING','MAX ATTACHMENT','MAND CD',
        'MAND CONV RPD','MAND TD','MAND OD W/COPING','MAND OD NO/COPING','MAND ATTACHMENT'];
        $students_users=StudentUser::get();
         $data=RemForm::get();
        return view('rem_form.create', compact('name','students_users','arr_rest_type','data'));
 }
 ///////////////////////////////Export///////////////////////////////////////////////
 public function export()
 {

        $currentTime = Carbon::now();
         return Excel::download(new RemFormExport,  $currentTime.'removable-report.xlsx');
 }
 public function exportstudent(){
    $students_users=StudentUser::get();

    return view('exports.student-rem',compact('students_users'));

 }
 public function exportexcelstudent(Request $request)
 {
    return Excel::download(new RemFormExportSingle($request->student_number), $request->student_number.'Removal_Report.xlsx');
   // return Excel::download(new MttRegistrationsExport($request->id), 'MttRegistrations.xlsx');


 }


 /////////////////////////////////End Export
 public function store(Request $request){


    $remform = new RemForm($request->all());
    //round average
    $value = $request->avg;
    $request->avg=  round($value, 2);
    //send student
    $email_student = DB::table('student_users')
    ->select('email')
    ->where('student_number',$request->student_number)
    ->get();
    if($email_student != null){
        $this->sendnotestudent($request);
    }
     $remform->save();
     $data=RemForm::all();
     return redirect()->back()->with('success', 'Saved successfully');
  }
  public function sendnotestudent($request){
    $email_student = DB::table('rem_forms')
  ->select('email','student_number')
  ->join('student_users', 'student_users.student_number', '=', 'fix_forms.student_number')
  ->where('student_users.student_number',$request->student_number)
  ->get();
  Mail::to($email_student)->send(new NoteMail($request));
}
  public function update(Request $request,$id){
    $data = RemForm::find($id);
   $data->update($request->all());

    $data->save();
    $data=RemForm::all();
    return redirect()->back()->with('success', 'Updated successfully');

    return redirect()->back();
   }
  public function delete($id){

    RemForm::where('id', $id)->delete();
    return redirect('/remform/fill')->with('success', 'delete successfully');


 }
  public function fill(){
  //  $prn="testtt";
    //$studentnumber="01-437201130";
    //return RemForm::where("student_number", $studentnumber)->where("p_rn", $prn)->orderBy('id', 'asc')->get();
    $words = explode(" ",  Auth::user()->name);
    $name = "";
    foreach ($words as $w) {
      $name .= mb_substr($w, 0, 3);
    }
    if(Auth::user()->type == "admin")
    {
        $name ="Admin1";


    }
    $data=[];
     $students_users=RemForm::select('student_number')->distinct()->get();



    return view('rem_form.fill', compact('name','students_users','data'));
 }
 //fetchname
 public function fetchname(Request $request)
 {
     $data['studentnames'] = StudentUser::where("student_number", $request->stunum)
                             ->get(["student_name", "student_number"]);
     return response()->json($data);
 }
 //fetchpationt
 public function fetchprn(Request $request){

 $data['prnlist']=   DB::table('rem_forms')->where("student_number",$request->studentnumber)->distinct()->get(['p_rn','student_number','student_name','p_name']);

  return  response()->json($data);

}
//get record
public function record(Request $request){
    $studentnumber = $request->studentnumber;
   $student_name = $request->student_name;
    $prn=$request->prn;
   if($request->ajax()) {
       $data = RemForm::where("student_number", $studentnumber)->where("p_rn", $prn)->orderBy('id', 'asc')->get();
   }
   return view('rem_form.fill_data', compact('data'));


}

public function note(Request $request){
    $data=RemForm::whereNotNull('note')->get();
    return view('note.index-rem', compact('data'));

 }
  public function edit(Request $request,$id){
    $students_users=RemForm::select('student_number')->distinct()->get();
    $record = RemForm::find($id);
    $recordall =RemForm::all();
   // $arr = ['11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48'];
  //  $arr_rest_type = ['MaxCD','MaxConv RPD','MaxTD','MaxOD w coping','MaxOD withouth coping','MaxSurveyed crwon','MaxAttachment','ManCD','ManConv RPD','ManTD','ManOD w coping','ManOD withouth coping','ManSurveyed crwon','ManAttachment'];

    $arr_rest_type = ['MAX CD','MAX CONV RPD',
    'MAX TD','MAX OD W/COPING','MAX OD NO/COPING','MAX ATTACHMENT','MAND CD',
    'MAND CONV RPD','MAND TD','MAND OD W/COPING','MAND OD NO/COPING','MAND ATTACHMENT'];

   $words = explode(" ",  Auth::user()->name);
   $name = "";
   foreach ($words as $w) {
     $name .= mb_substr($w, 0, 3);
   }
   if(Auth::user()->type == "admin")
   {
       $name ="Admin1";


   }
   return view('rem_form.edit', compact('name','students_users','record','recordall','arr_rest_type'));
}


}
