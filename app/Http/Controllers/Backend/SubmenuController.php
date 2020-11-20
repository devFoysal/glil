<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Submenu;

class SubmenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $menus = Menu::all();
        $submenus = Submenu::orderBy('orders', 'asc')->get();
        return view('backend.menu.submenu', compact('menus', 'submenus'));
    }

    public function store () 
    {
        $data = request()->validate([
            'name_en'   => 'required',
            'menu_id'   => 'required',
            'name_bn'   => 'required',
            'status'    => 'required',
        ]);

        Submenu::create($data);
        return back()->with('success', 'Submenu Created Successfully');
    }

    public function edit (Request $request)
    {
        $data = request()->validate([
            'name_en'   => 'required',
            'menu_id'   => 'required',
            'name_bn'   => 'required',
            'orders'    => 'required',
            'status'    => 'required',
        ]);

        Submenu::where('id', $request->id)->update($data);
        return redirect()->back()->with('success', 'Submenu Updated Successfully');
    }

    public function destroy ($id)
    {
        Submenu::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Menu Deleted Successfully.');
    }
}
