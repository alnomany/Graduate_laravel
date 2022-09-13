<?php

namespace App\Exports;

use App\Models\RemForm;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class RemFormExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RemForm::all();
    }
    public function view(): View
    {

        return view('exports.remform', [
            'fixform' => RemForm::get()
        ]);
    }
}
