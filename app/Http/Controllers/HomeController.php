<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('students')
          ->select(
           DB::raw('gender as gender'),
           DB::raw('count(*) as number'))
          ->groupBy('gender')
          ->get();
        $array[] = ['Gender', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->gender, $value->number];
          // dd($array[++$key]);
        }
        return view('admin.home.index')->with('gender', json_encode($array));
    }
}
