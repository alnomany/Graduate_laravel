<?php

namespace App\Exports;

use App\Models\FixForm;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;

class FixFormExportSingle  implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $student_number;

    function __construct($student_number) {
           $this->student_number = $student_number;
    }
    public function collection()
    {
        return FixForm::where('student_number',$this->student_number)->get();
    }
}
