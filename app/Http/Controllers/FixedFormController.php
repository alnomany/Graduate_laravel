<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\NoteMail;
use App\Models\FixForm;
use Carbon\Traits\Date;

use App\Mail\GradeStudent;
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
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreFixFormRequest;

class FixedFormController extends Controller
{



    //send excel by email
    public function loginbyemail(){
        return view('fixed_form.form');
    }
        //send email verfication
        public function loginbyemailverfication(Request $request){
            $this->validate($request,[
                'email'=>'required|exists:student_users,email',

             ]);
             //                'code'=>'required|exists:student_users,password',

             $email= $request->email;

             $id =StudentUser::where('email',$email)->value('student_number');
             $student_name =StudentUser::where('email',$email)->value('student_name');
             $code=$this->generateUniqueCode();
          $code_verification= DB::table('student_users')
            ->where('student_number', $id)
            ->update(['password' => $code]);


             //send email

             Mail::to($email)->send(new GradeStudent($id,$code));


             return view('fixed_form.cheackcode',compact('id','email','student_name'))->with('success','Item created successfully!');
        }
        //step 3
        public function cheackcode(Request $request){


             $email= $request->email;
             $code= $request->Code;


             $id =StudentUser::where('email',$email)->value('student_number');
             $student_name =StudentUser::where('email',$email)->value('student_name');
             $password =StudentUser::where('email',$email)->value('password');

            if ($code == $password){
                return view('home1',compact('id','student_name'));

            }else{
                return "the code not correct please try again";
            }

        }
        public function generateUniqueCode()
        {
            do {
                $code = random_int(100000, 999999);
            } while (StudentUser::where("password", "=", $code)->first());

            return $code;
        }
    public function ExportExcelByEmail(Request $request){
        $this->validate($request,[
            'email'=>'required|exists:student_users,email',

         ]);
        $email= $request->email;
        $password= $request->Password;

        $name=StudentUser::where('email',$email)->value('student_name');
        $id =StudentUser::where('email',$email)->value('student_number');
        //send email




        Mail::to($email)->send(new GradeStudent($name,$id,$password));

        return view('home1',compact('name','id'));

    }
    public function exportexcelstudentbyemail(Request $request,$id)
    {

       return Excel::download(new FixFormExportSingle($id), $id.'Fixed_Report.xlsx');
      // return Excel::download(new MttRegistrationsExport($request->id), 'MttRegistrations.xlsx');


    }
    //test
    public function formCreate()
    {
        return view('fixed_form.form');
    }

    /**
    * Write code on Method
    *
    * @return response()
    */
    public function formPost()
    {
        return redirect('/forms');
    }
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
        $arr_rest_type = ['Single Crown or Retainer','Implant Crown','Pontic/s','Cast Post & Core','Prefabricated Post & Core Build up','Non-rigid Connector','Resin-Bonded FPD','VENEER, Onlay, Inlay'];
        $students_users=StudentUser::get();
         $data=FixForm::get();
        return view('fixed_form.create', compact('name','students_users','arr','arr_rest_type','data'));
 }
 public function edit(Request $request,$id){
     $students_users=FixForm::select('student_number')->distinct()->get();
     $record = FixForm::find($id);
     $recordall =FixForm::all();
     $arr = ['11','12','13','14','15','16','17','18','21','22','23','24','25','26','27','28','31','32','33','34','35','36','37','38','41','42','43','44','45','46','47','48'];
     //$arr_rest_type = ['FPD','Crwn','Post&core','Onlay','Inlay','Veneer'];
     $arr_rest_type = ['Single Crown or Retainer','Implant Crown','Pontic/s','Cast Post & Core','Prefabricated Post & Core Build up','Non-rigid Connector','Resin-Bonded FPD','VENEER, Onlay, Inlay'];



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
     $students_users=FixForm::select('student_number')->distinct()->orderBy('student_number', 'asc')->get();

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
 public function sendnotestudent($request){
    $email_student = DB::table('student_users')
    ->select('email')
    ->where('student_number',$request->student_number)
    ->get();
    Mail::to($email_student)->send(new NoteMail($request));
 }


 public function sendnote($request){
  $to= Auth::user()->email;
  //$to="sbajunaid@ksu.edu.sa";
  $toadmin="aboosalem@gmail.com";
  $to="aalnomany50@gmail.com";
  Mail::to($to)->send(new NoteMail($request));
  Mail::to($toadmin)->send(new NoteMail($request));









 }



 public function fetchname(Request $request)
 {
     $data['studentnames'] = StudentUser::where("student_number", $request->stunum)
->distinct()->get(["student_name", "student_number"]);
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

    $data['prnlist']=   DB::table('fix_forms')->where("student_number",$request->studentnumber)->distinct()->get(['p_rn','student_number','student_name','p_name']);


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


 public function store(Request $request){


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
    //round average
    $value = $request->avg;
    $request->avg=  round($value, 2);
    //send student
    $email_student_count = DB::table('student_users')
    ->select('email')
    ->where('student_number',$request->student_number)
    ->count();
    if($email_student_count > 0){


        $this->sendnotestudent($request);
    }



    $fixform->save();

    $data=FixForm::all();
   // return redirect()->back()->withInput()->with('success', 'Saved successfully');
    return redirect()->route('create', ['p_rn' => $fixform->p_rn,'p_name' => $fixform->p_name,'student_number' => $fixform->student_number,'student_name' => $fixform->student_name])->with('success', 'Saved successfully');


  //  return view('fixed_form.create', compact('data'));
 }
 public function update(Request $request,$id){
     $data = FixForm::find($id);
     $data->update($request->all());
     $data->save();
     $data=FixForm::all();
     return redirect()->back()->with('success', 'Updated Successfully');

     return redirect()->back();
    }
    public function delete($id){

        FixForm::where('id', $id)->delete();
        return redirect('/fixedform/fill')->with('success', 'Deleted Successfully');


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
 public function exportexcelstudenturl(Request $request,$id)
 {
    return Excel::download(new FixFormExportSingle($request->student_number), $request->student_number.'Fixed_Report.xlsx');
   // return Excel::download(new MttRegistrationsExport($request->id), 'MttRegistrations.xlsx');


 }
 public function updatePassword(){

     $student_numbers=["01-437201130","02-438200126","03-438200128","04-438200149","05-438200243","06-438200279","07-438200335","08-438200403","09-438200420","10-438200456","11-438200571","12-438200611","13-438200712","14-438200897","15-438200923","16-438200948","17-438201205","18-438201208","19-438201270","20-438201271","21-438201347","22-438201407","23-438201418","24-438201444","25-438201456","26-438201515","27-438201523","28-438201540","29-438201541","30-438201663","31-438201740","32-438201767","33-438201958","34-438201999","35-438202005","36-438202007","37-438202052","38-438202307","39-438202335","40-438202446","41-438202518","42-438202561","43-438202617","44-438202640","45-438202666","46-438202712","47-438202724","48-438202737","49-438202868","50-438202871","51-438202874","52-438203351","53-438204370"];
    foreach ($student_numbers as $student_number){
       $student_number_sub=  substr($student_number, 3, 22);

    $email=$student_number_sub.'@student.ksu.edu.sa';
    DB::table('student_users')->where('student_number', $student_number)->update(['student_users.email'=>$email]);
   }

    /*
    $password = Hash::make('12341234');
    DB::table('users')
    ->update(['users.password'=> $password]);
    */

 }
 public function exportstudent(){
    $students_users=StudentUser::get();

    return view('exports.student',compact('students_users'));



 }
 public function exportstudentbyemail(){

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
