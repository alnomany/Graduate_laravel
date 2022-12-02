<?php

namespace App\Exports;

use App\Models\FixForm;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class FixFormExportSingle  implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    function __construct($id) {
           $this->student_number = $id;
    }
    public function collection()
    {
        return FixForm::where('student_number',$this->student_number)->get('id');
    }
    public function headings(): array
    {
        return [
           // 'Id','StuNum','StuName','Patient Name','PRN',
            //'Treatment Plan Mark',	'Sign','Date','Restoration type',	'Tooth Num'	,'Tooth Preparation','Sign','Date',	'Provisional','Sign','Date','Final impression/ resin pattern','Sign','Date',
            //	Fiber post core build up Mark	Sign	Try-in	Sign	Cementation	Sign	Average
            'id','student_number','student_name','p_name','p_rn','arch_type','Tooth Num'	,'Tooth Preparation','Sign','Date','Provisional','Sign','Date','Final impression/ resin pattern','Sign','Date','Try in Mark','Sign','Date','Cementation','Sign','Date',
            //'arch_type1','rm1','rm1_sig','rm1_date','rm2','rm2_sig','rm2_date','rm3','rm3_sig','rm3_date','rm4','rm4_sig','rm4_date','rm5','rm5_sig','rm5_date','rm6','rm6_sig','rm6_date','rm7','rm7_sig','rm7_date','rm8','rm8_sig','rm8_date','rm9','rm9_sig','rm9_date','rm10','rm10_sig','rm10_date','rm11','rm11_sig','rm11_date','rm12','rm12_sig','rm12_date','rm13','rm13_sig','rm13_date','avg','total_avg','note','note_sign','status','email_verified_at'
        ];
    }
}
