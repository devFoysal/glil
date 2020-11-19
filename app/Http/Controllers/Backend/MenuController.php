<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Submenu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $menus = Menu::all();
        return view('backend.menu', compact('menus'));
    }

    public function store () 
    {
        $data = request()->validate([
            'name_en'   => 'required',
            'name_bn'   => 'required',
            'status'    => 'required',
        ]);

        Menu::create($data);
        return back()->with('success', 'Menu Created Successfully');
    }

    public function edit (Request $request)
    {
        $data = request()->validate([
            'name_en'   => 'required',
            'name_bn'   => 'required',
            'status'    => 'required',
        ]);

        Menu::where('id', $request->id)->update($data);
        return redirect()->back()->with('success', 'Menu Updated Successfully');
    }

    public function destroy ($id)
    {
        Menu::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Menu Deleted Successfully.');
    }
}