<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\FixForm;
use App\Models\RemForm;

use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Exports\RemFormExport;
use App\Exports\RemFormExportSingle;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
        $arr_rest_type = ['MAND CD','MAND CONV RPD',
        'MAND TD','MAND OD W/COPING','MAND OD NO/COPING','MAND SURVEYED CROWN','MAND ATTACHMENT','ManCD','ManConv RPD','ManTD','ManOD w coping','ManOD withouth coping','ManSurveyed crwon','ManAttachment'];
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

     $remform->save();
     $data=RemForm::all();
     return redirect()->back()->with('success', 'Saved successfully');
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

   // $students_users=StudentUser::get();
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
    $data['prnlist'] =RemForm::where("student_number",$request->studentnumber)->get([
   'student_number',
   'student_name',
   'p_name',
   'p_rn',
   'arch_type',
 ]);

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


  public function edit(Request $request,$id){
    $students_users=RemForm::select('student_number')->distinct()->get();
    $record = RemForm::find($id);
    $recordall =RemForm::all();
    $arr = ['11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48'];
  //  $arr_rest_type = ['MaxCD','MaxConv RPD','MaxTD','MaxOD w coping','MaxOD withouth coping','MaxSurveyed crwon','MaxAttachment','ManCD','ManConv RPD','ManTD','ManOD w coping','ManOD withouth coping','ManSurveyed crwon','ManAttachment'];
    $arr_rest_type = ['MAND CD','MAND CONV RPD',
    'MAND TD','MAND OD W/COPING','MAND OD NO/COPING','MAND SURVEYED CROWN','MAND ATTACHMENT','ManCD','ManConv RPD','ManTD','ManOD w coping','ManOD withouth coping','ManSurveyed crwon','ManAttachment'];

   $words = explode(" ",  Auth::user()->name);
   $name = "";
   foreach ($words as $w) {
     $name .= mb_substr($w, 0, 3);
   }
   if(Auth::user()->type == "admin")
   {
       $name ="Admin1";


   }
   return view('rem_form.edit', compact('name','students_users','record','recordall','arr','arr_rest_type'));
}


}
