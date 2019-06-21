<?php

namespace App\Http\Controllers\Entrance;

use PDF;
use App\Student;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EntranceFormController extends Controller
{
    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path('Entrance/images');
    }

    public function index()
    {
        $data = DB::table('menus')->where('id', 'like', '1')->get();
        foreach ($data as $menu)
        {
            if ($menu->status == 1)
            {
                $menus = DB::table('menus')->orderBy('id', 'desc')->get();
                $faculty = DB::table('faculties')->pluck('name', 'id');
                $class = DB::table('levels')->pluck('name', 'id');

                return view('entrance.create', compact('class', 'faculty', 'menus'));
            }
            else
            {
                return back();
            }
        }
    }

    public function store(Requests\EntranceRequest $request)
    {
        $data = $this->handleRequest($request);
        Student::create($data);

        return redirect()->route('entrance.show', $request->serial)->withInput($request->all());
    }

    private function handleRequest($request)
    {
        $data = $request->all();
        if ($request->hasFile('image'))
        {
            $image       = $request->file('image');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination, $fileName);

            $data['image'] = $fileName;
        }
        return $data;
    }

    public function show(Student $serial)
    {
        if ($serial->serial)
        {
            $entranceDate = DB::table('menus')->where('id', '3')->first();
            return view('entrance.admit-card', compact('serial', 'entranceDate'));
        }
    }

}
