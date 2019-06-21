<?php

namespace App\Http\Controllers\Backend;

use App\Level;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Level::all();
        return view('admin.grade.index', compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = new Level;
        return view('admin.grade.create', compact('grade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\GradeRequest $request)
    {
        Level::create($request->all());
        return redirect()->route('grade.index')->with('message', 'New Grade has been added.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Level::findOrFail($id);
        return view('admin.grade.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\GradeRequest $request, $id)
    {
      Level::findOrFail($id)->update($request->all());
      return redirect()->route('grade.index')->with('message', 'Grade has been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Level::findOrFail($id)->delete();
        return redirect()->route('grade.index')->with('message', 'Grade has been deleted');
    }
}
