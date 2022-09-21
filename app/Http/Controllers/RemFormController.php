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
    $validated = $request->validate([
        'student_number' => 'required|in:["01-437201130","02-438200126","03-438200128","04-438200149","05-438200243","06-438200279","07-438200335","08-438200403","09-438200420","10-438200456","11-438200571","12-438200611","13-438200712","14-438200897","15-438200923","16-438200948","17-438201205","18-438201208","19-438201270","20-438201271","21-438201347","22-438201407","23-438201418","24-438201444","25-438201456","26-438201515","27-438201523","28-438201540","29-438201541","30-438201663","31-438201740","32-438201767","33-438201958","34-438201999","35-438202005","36-438202007","37-438202052","38-438202307","39-438202335","40-438202446","41-438202518","42-438202561","43-438202617","44-438202640","45-438202666","46-438202712","47-438202724","48-438202737","49-438202868","50-438202871","51-438202874","52-438203351","53-438204370"]',
        'student_name' => 'required',

        'p_name' => 'required',
        'p_rn' => 'required',

        'arch_type' => 'required',


        

    ]);
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
   return view('rem_form.edit', compact('name','students_users','record','recordall','arr','arr_rest_type'));
}


}
