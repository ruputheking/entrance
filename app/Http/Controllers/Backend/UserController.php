<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current = Auth::user()->role;
        if ($current == "Admin")
        {
            $user = User::all();
            return view('admin.user.index', compact('user'));
        }
        else
        {
            return back()->with('message', "You don't have permission.");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $current = Auth::user()->role;
        if ($current == "Admin")
        {
            $user = new User;
            return view('admin.user.create', compact('user'));
        }
        else
        {
            return back()->with('message', "You don't have permission.");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'role' => $request->role,
        ];
        User::create($data);
        return redirect()->route('user.index')->with('message', 'New User has been added.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'role' => $request->role,
        ];
        User::findOrFail($id)->update($data);
        if (Auth::user()->status == "Admin")
        {
            return redirect()->route('user.index')->with('message', 'User data has been updated.');
        }
        else
        {
            return redirect()->route('home')->with('message', 'User data has been updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('message', 'User has been deleted.');
    }
}
