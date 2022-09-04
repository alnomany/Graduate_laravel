<?php

namespace App\Http\Controllers;

use App\Models\FixForm;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Exports\FixFormExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class FixedFormController extends Controller
{
    //
    public function create(){
        $words = explode(" ",  Auth::user()->name);
        $name = "";
        foreach ($words as $w) {
          $name .= mb_substr($w, 0, 3);
        }
        $arr = ['11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48'];
        $arr_rest_type = ['FPD','Crwn','Post&core','Onlay','Inlay','Veneer'];
        $students_users=StudentUser::get();
         $data=FixForm::get();
        return view('fixed_form.create', compact('name','students_users','arr','arr_rest_type','data'));
 }
 public function edit(Request $request,$id){
     $students_users=FixForm::select('student_number')->distinct()->get();
     $record = FixForm::find($id);
     $arr = ['11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48'];
     $arr_rest_type = ['FPD','Crwn','Post&core','Onlay','Inlay','Veneer'];


    $words = explode(" ",  Auth::user()->name);
    $name = "";
    foreach ($words as $w) {
      $name .= mb_substr($w, 0, 3);
    }
    return view('fixed_form.edit', compact('name','students_users','record','arr','arr_rest_type'));
 }

public function fill(){
    $words = explode(" ",  Auth::user()->name);
    $name = "";
    foreach ($words as $w) {
      $name .= mb_substr($w, 0, 3);
    }
    $data=[];
     $students_users=FixForm::select('student_number')->distinct()->get();

   // $students_users=StudentUser::get();
    return view('fixed_form.fill', compact('name','students_users','data'));
 }




 public function record(Request $request){
     $studentnumber = $request->studentnumber;
    $student_name = $request->student_name;
    $prn=$request->prn;
    if($request->ajax()) {
        $data = FixForm::where("student_number", $studentnumber)->where("p_rn", $prn)->orderBy('id', 'asc')->get();
    }
    return view('fixed_form.fill_data', compact('data'));


 }


 public function fetchname(Request $request)
 {
     $data['studentnames'] = StudentUser::where("student_number", $request->stunum)
                             ->get(["student_name", "student_number"]);
     return response()->json($data);
 }
 public function fetchpation(Request $request)
 {
    $data['pationnames'] = FixForm::where("p_rn", $request->pationnum)
    ->get(["p_name", "p_rn"]);
return response()->json($data);
 }


public function fetchprn(Request $request){
     $data['prnlist'] =FixForm::where("student_number",$request->studentnumber)->get([
    'student_number',
    'student_name',
    'p_name',
    'p_rn',
    'rest_type',
    'tooth_number',
    'avg',
    'note',
    'total_avg',
    'status',
    'fm0',
    'fm0_sig']);

   return  response()->json($data);

}

 public function store(Request $request){
   // $fixform = new FixForm($request->except('fm1'));
   $fixform = new FixForm($request->all());
   //return avg($request->fm1+$request->fm2+$request->fm3);
   //average($request->fm1,$request->fm2,$request->fm3,$request->fm4,$request->fm5,$request->fm6);
    $average = collect([$request->fm1,$request->fm2,$request->fm3,$request->fm4,$request->fm5,$request->fm6])->average();
    "the average is " .$average;
    $fixform->save();
    $data=FixForm::all();
    return redirect()->back()->with('success', 'Saved successfully');


  //  return view('fixed_form.create', compact('data'));
 }
 public function update(Request $request,$id){
     $data = FixForm::find($id);
    $data->update($request->all());

     $data->save();
     $data=FixForm::all();
     return redirect()->back()->with('success', 'Updated successfully');

     return redirect()->back();
    }


 public function export()
 {
     return Excel::download(new FixFormExport, 'report.xlsx');
 }

 public function index(){
    $data=FixForm::all();
    return view('fixed_form.index', compact('data'));

}
  /*
 public function fetchtooth(Request $request){
    $data['toothnumbers'] = FixForm::where("p_rn", $request->prnnumber)
    ->get(["tooth_number"]);
return response()->json($data);


 }
 */
}
