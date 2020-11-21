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
        $menus = Menu::orderBy('orders', 'asc')->get();
        return view('backend.menu.index', compact('menus'));
    }

    public function store (Request $request) 
    {
        $validate = request()->validate([
            'name_en'   => 'required',
            'name_bn'   => 'required',
            'status'    => 'required',
        ]);

        if(! $validate) return back()->with('error', 'Please try again');

        $menu = new Menu;
        $menu->name_en = $request->name_en;
        $menu->name_bn = $request->name_bn;
        $menu->slug_en = $request->slug_en;
        $menu->slug_bn = $request->slug_bn;
        $menu->status = $request->status;
        $menu->save();
        return back()->with('success', 'Menu Created Successfully');
       
    }

    public function edit (Request $request)
    {
        $validate = request()->validate([
            'name_en'   => 'required',
            'name_bn'   => 'required',
            'orders'   => 'required',
            'status'    => 'required',
        ]);

        if(! $validate) return redirect()->back()->with('error', 'Please try again');

        $menu = Menu::findOrFail($request->id);
        $menu->name_en = $request->name_en;
        $menu->name_bn = $request->name_bn;
        $menu->orders = $request->orders;
        $menu->slug_en = $request->slug_en;
        $menu->slug_bn = $request->slug_bn;
        $menu->status = $request->status;
        $menu->update();
        return redirect()->back()->with('success', 'Menu Updated Successfully');
        
    }

    public function destroy ($id)
    {
        Menu::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Menu Deleted Successfully.');
    }
}