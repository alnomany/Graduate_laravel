<?php

namespace App\Exports;

use App\Models\RemForm;
use Maatwebsite\Excel\Concerns\FromCollection;

class RemFormExportSingle implements FromCollection
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
        return RemForm::where('student_number',$this->student_number)->get();
    }
}
