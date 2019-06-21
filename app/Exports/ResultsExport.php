<?php

namespace App\Exports;

use App\Result;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ResultsExport implements FromView
{
    /**
    * @return \Illuminate\Support\FromView
    */
    public function view(): View
    {
        return view('admin.entrance.result-export', [
            'results' => Result::all()
        ]);
    }
}
