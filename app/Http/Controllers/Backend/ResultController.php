<?php

namespace App\Http\Controllers\Backend;

use App\Result;
use Illuminate\Http\Request;
use App\Exports\ResultsExport;
use App\Imports\ResultsImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.entrance.result');
    }

    public function import(Request $request)
    {
         $this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
         ]);

         $path = $request->file('select_file');

         Excel::import(new ResultsImport, $path);

         return back()->with('message', 'Student Result has been Imported.');
    }

    public function action(Request $request)
    {
        if($request->ajax())
        {
           $output = '';
           $query = $request->get('query');
           if($query != '')
           {
            $data = Result::orderBy('id', 'desc')
                      ->where('name', 'like', '%'.$query.'%')
                      ->orWhere(['gender' => $query])
                      ->orWhere('faculty', 'like', '%'.$query.'%')
                      ->orWhere('status', 'like', '%'.$query.'%')
                      ->get();
            }
            else
            {
                $data = Result::orderBy('serial', 'desc')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                     <tr>
                      <td>'.$row->serial.'</td>
                      <td>'.$row->name.'</td>
                      <td>'.$row->faculty.'</td>
                      <td>'.$row->gender.'</td>
                      <td>'.$row->dob.'</td>
                      <td>'.$row->status.'</td>
                      <td style="width:10px;">
                        <button type="submit" class="btn btn-xs btn-danger delete" id="'.$row->id.'">
                          <i class="fa fa-trash"></i>
                        </button>
                      </td>
                     </tr>
                     ';
                  }
               }
               else
               {
                  $output = '
                  <tr>
                   <td align="center" colspan="7">No Data Found</td>
                  </tr>
                  ';
               }
               $data = array(
                  'table_data'  => $output,
                  'total_data'  => $total_row
               );
               echo json_encode($data);
          }
    }

    public function export()
    {
        return Excel::download(new ResultsExport, 'students_result_record.xlsx');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax())
        {
            Result::where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Students result has been deleted.</div>';
        }
    }
}
