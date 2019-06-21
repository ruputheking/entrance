<?php

namespace App\Http\Controllers\Backend;

use DB;
use App\Student;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class FormListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = DB::table('faculties')->pluck('name', 'id');
        return view('admin.entrance.formlist', compact('faculty'));
    }

    public function action(Request $request)
    {
        if($request->ajax())
        {
           $output = '';
           $query = $request->get('query');
           if($query != '')
           {
            $data = Student::orderBy('id', 'desc')
                      ->where('name', 'like', '%'.$query.'%')
                      ->orWhere(['gender' => $query])
                      ->orWhere('school', 'like', '%'.$query.'%')
                      ->orWhere('faculty_id', 'like', '%'.$query.'%')
                      // ->orWhere('gpa', 'like', '%'.$query.'%')
                      ->get();
            }
            else
            {
                $data = Student::orderBy('serial', 'desc')->get();
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
                      <td>'.$row->school.'</td>
                      <td>'.$row->gender.'</td>
                      <td>'.$row->faculty->name.'</td>
                      <td>'.$row->gpa.'</td>
                      <td>'.$row->dob.'</td>
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
        return Excel::download(new StudentsExport, 'students_record.xlsx');
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
            DB::table('students')
                ->where('id', 1)
                ->delete();
            echo '<div class="alert alert-success">All students record has been deleted.</div>';
      }
    }
}
