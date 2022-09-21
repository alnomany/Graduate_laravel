<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\NoteMail;
use App\Models\FixForm;
use Carbon\Traits\Date;

use App\Models\StudentUser;
use Illuminate\Http\Request;
use App\Exports\FixFormExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Exports\FixFormExportSingle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreFixFormRequest;

class FixedFormController extends Controller
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

        $arr = ['11','12','13','14','15','16','17','18','21','22','23','24','25','26','27','28','31','32','33','34','35','36','37','38','41','42','43','44','45','46','47','48'];
        $arr_rest_type = ['FPD','Crwn','Post&core','Onlay','Inlay','Veneer'];
        $students_users=StudentUser::get();
         $data=FixForm::get();
        return view('fixed_form.create', compact('name','students_users','arr','arr_rest_type','data'));
 }
 public function edit(Request $request,$id){
     $students_users=FixForm::select('student_number')->distinct()->get();
     $record = FixForm::find($id);
     $recordall =FixForm::all();
     $arr = ['11','12','13','14','15','16','17','18','21','22','23','24','25','26','27','28','31','32','33','34','35','36','37','38','41','42','43','44','45','46','47','48'];
     $arr_rest_type = ['FPD','Crwn','Post&core','Onlay','Inlay','Veneer'];


    $words = explode(" ",  Auth::user()->name);
    $name = "";
    foreach ($words as $w) {
      $name .= mb_substr($w, 0, 3);
    }
    if(Auth::user()->type == "admin")
    {
        $name ="Admin1";


    }
    return view('fixed_form.edit', compact('name','students_users','record','recordall','arr','arr_rest_type'));
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
 public function note(Request $request){
    $data=FixForm::whereNotNull('note')->get();
    return view('note.index', compact('data'));

 }
 public function sendnote($request){
  $to= Auth::user()->email;
  //$to="sbajunaid@ksu.edu.sa";
  $toadmin="aboosalem@gmail.com";
  $to="aalnomany50@gmail.com";
  Mail::to($to)->send(new NoteMail($request));
  Mail::to($toadmin)->send(new NoteMail($request));


/*
    return  $email_student = DB::table('fix_forms')
    ->select('email')
    ->join('student_users', 'student_users.student_number', '=', 'fix_forms.student_number')
    ->where('student_users.student_number',$fixform->student_number)
    ->get();
*/


 

 }



 public function fetchname(Request $request)
 {
     $data['studentnames'] = StudentUser::where("student_number", $request->stunum)
                             ->get(["student_name", "student_number"]);
     return response()->json($data);
 }
 public function fetch_name_student_edit(Request $request){

    $data = StudentUser::where("student_number", $request->studentnum)
    ->distinct("student_name")->get(["student_name"]);
     return response()->json($data);
 }
 public function fetchpation(Request $request)
 {
    $data = FixForm::where("p_rn", $request->pationnum)
    ->distinct("p_name")->get("p_name");
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
public function fetchremprn(Request $request){
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


 public function store(StoreFixFormRequest $request){
 
    //message
    if($request->note != null){
        // $currentURL = URL::current();

        $this->sendnote($request);
    }
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
 public function update(StoreFixFormRequest $request,$id){
     $data = FixForm::find($id);
     $data->update($request->all());
     $data->save();
     $data=FixForm::all();
     return redirect()->back()->with('success', 'Updated successfully');

     return redirect()->back();
    }
    public function delete($id){

        FixForm::where('id', $id)->delete();
        return redirect('/fixedform/fill')->with('success', 'delete successfully');


     }


 public function export()
 {

        $currentTime = Carbon::now();
         return Excel::download(new FixFormExport,  $currentTime.'report.xlsx');
 }
 public function exportexcelstudent(Request $request)
 {
    return Excel::download(new FixFormExportSingle($request->student_number), $request->student_number.'Fixed_Report.xlsx');
   // return Excel::download(new MttRegistrationsExport($request->id), 'MttRegistrations.xlsx');


 }
 public function updatePassword(){
    /*$password = Hash::make('12341234');

    $data = array(
        array('password'=>$password),
        //...
    );

    User::insert($data);
    */
    $password = Hash::make('12341234');

    DB::table('users')

->update(['users.password'=> $password]);
/*
    $post=User::where('id',15)->get();
    $password = Hash::make('12341234');

    $post()->update(['password' => '1234213']);
*/
 }
 public function exportstudent(){
    $students_users=StudentUser::get();

    return view('exports.student',compact('students_users'));



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
