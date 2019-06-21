<?php

namespace App\Http\Controllers\Backend;

use App\Menu;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function togglestatus(Request $request, $id)
    {
        $order = Menu::findOrFail($id);
        if ($request->status == null)
        {
            $order->status = "0";
            $order->date = $request->date;
        }
        else
        {
            $order->status = $request->status;
            $order->date = $request->date;
        }
        $order->save();

        return redirect()->back()->with('message', 'Updated successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = new Menu;
        return view('admin.menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\MenuRequest $request)
    {
        Menu::create($request->all());
        return redirect()->route('menu.index')->with('message', 'New Menu has been Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\MenuRequest $request, $id)
    {
        $menu = Menu::findOrFail($id)->update($request->all());
        return redirect()->route('menu.index')->with('message', 'Menu has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return redirect()->route('menu.index')->with('message', "You don't have permission.");
    }

}
