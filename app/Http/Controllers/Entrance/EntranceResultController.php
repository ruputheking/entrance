<?php

namespace App\Http\Controllers\Entrance;

use App\Result;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EntranceResultController extends Controller
{
    public function search()
    {
        $data = DB::table('menus')
                    ->where('id', 'like', '2')
                    ->get();
        foreach ($data as $menu)
        {
            if ($menu->status == '1')
            {
                $menus = DB::table('menus')
                            ->orderBy('id', 'desc')
                            ->get();
                return view('entrance.search', compact('menus'));
            }
            else
            {
                return back();
            }
        }
    }

    public function store(Requests\EntranceResultRequest $request)
    {
        $result = Result::where(["name" => $request->name])
                          ->where(["serial" => $request->serial])
                          ->first();
        if ($result)
        {
            $menus = DB::table('menus')
                        ->orderBy('id', 'desc')
                        ->get();
            return view('entrance.search', compact('result', 'menus'));
        }
        else
        {
            return redirect()->back()->with('message', 'Sorry your input is wrong');
        }
    }

    public function result()
    {
        $data = DB::table('menus')
                    ->where('id', 'like', '2')
                    ->get();
        foreach ($data as $menu)
        {
            if ($menu->status == '1')
            {
                $menus = DB::table('menus')
                            ->orderBy('id', 'desc')
                            ->get();
                return view('entrance.result', compact('menus'));
            }
            else
            {
                return back();
            }
        }
    }

    public function resultStore(Requests\ResultByDobRequest $request)
    {
        $result = Result::where(["name" => $request->name])
                          ->where(["dob" => $request->dob])
                          ->first();
        if ($result)
        {
            $menus = DB::table('menus')
                        ->orderBy('id', 'desc')
                        ->get();
            return view('entrance.result', compact('result', 'menus'));
        }
        else
        {
            return redirect()->back()->with('message', 'Sorry your input is wrong');
        }
    }
}
