<?php

namespace App\Exports;

use App\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentsExport implements FromView
{
    /**
    * @return \Illuminate\Support\FromView
    */
    public function view(): View
    {
        return view('admin.entrance.student-export', [
            'students' => Student::all()
        ]);
    }
}
