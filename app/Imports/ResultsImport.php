<?php

namespace App\Imports;

use App\Result;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class ResultsImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows)
    {
         Validator::make($rows->toArray(), [
             '*.0' => 'required|unique:results,serial',
             '*.1' => 'required',
             '*.2' => 'required',
             '*.3' => 'required',
             '*.4' => 'required',
             '*.5' => 'required',
         ])->validate();

        foreach ($rows as $row) {
            Result::create([
                'serial' => $row[0],
                'name' => $row[1],
                'faculty' => $row[2],
                'gender' => $row[3],
                'dob' => $row[4],
                'status' => $row[5],
            ]);
        }
    }
}
