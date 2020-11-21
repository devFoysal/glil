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

    public function store (Request $request) 
    {
        $validate = request()->validate([
            'name_en'   => 'required',
            'menu_id'   => 'required',
            'name_bn'   => 'required',
            'status'    => 'required',
        ]);

        if(! $validate) return redirect()->back()->with('error', 'Please try again');

        $submenu = new Submenu;
        $submenu->menu_id = $request->menu_id;
        $submenu->name_en = $request->name_en;
        $submenu->name_bn = $request->name_bn;
        $submenu->slug_en = $request->slug_en;
        $submenu->slug_bn = $request->slug_bn;
        $submenu->status = $request->status;
        $submenu->save();
        return redirect()->back()->with('success', 'Submenu Created Successfully');
    }

    public function edit (Request $request)
    {
        $validate = request()->validate([
            'name_en'   => 'required',
            'menu_id'   => 'required',
            'name_bn'   => 'required',
            'orders'    => 'required',
            'status'    => 'required',
        ]);

        if(! $validate) return redirect()->back()->with('error', 'Please try again');

        $submenu = Submenu::findOrFail($request->id);
        $submenu->menu_id = $request->menu_id;
        $submenu->name_en = $request->name_en;
        $submenu->name_bn = $request->name_bn;
        $submenu->orders = $request->orders;
        $submenu->slug_en = $request->slug_en;
        $submenu->slug_bn = $request->slug_bn;
        $submenu->status = $request->status;
        $submenu->update();
        return redirect()->back()->with('success', 'Submenu Update Successfully');
    }

    public function destroy ($id)
    {
        Submenu::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Menu Deleted Successfully.');
    }
}
