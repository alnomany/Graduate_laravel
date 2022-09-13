<?php

namespace App\Exports;

use App\Models\FixForm;
use App\Models\RemForm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class FixFormExport implements FromView

{



    public function collection()
    {
        return RemForm::get();
    }


    public function view(): View
    {

        return view('exports.remform', [
            'fixform' => RemForm::get()
        ]);
    }


    /*
    public function map($fixform): array
    {
        return [
            $fixform->p_rn,
            $fixform->p_name,
            $fixform->tooth_number,
            $fixform->rest_type,
            $fixform->fm1,
            $fixform->fm1_sig,
            $fixform->fm2,
            $fixform->fm2_sig,
            $fixform->fm3,
            $fixform->fm3_sig,
            $fixform->fm4,
            $fixform->fm4_sig,
            $fixform->fm5,
            $fixform->fm5_sig,
            $fixform->fm6,
            $fixform->fm6_sig,
            $fixform->avg,
            $fixform->note,



            //$fixform->user->name,
          //  Date::dateTimeToExcel($invoice->created_at),
        ];
    }
    public function headings(): array
    {
        return [
            'PRN',
            'Patient Name',
            'Tooth No',
            'Restoration type',
            'Examination and Tx Planning',
            'Sign',
            'Provisional',
            'Sign',
            'Final impression/ resin pattern',
            'Sign',
            'Prefab post cementation & core build-up',
            'Sign',
            'Try-in',
            'Sign',
            'Cementation',
            'Sign',
            'Average',
            'note'

        ];
    }
    */
}
