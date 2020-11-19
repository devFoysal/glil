<?php

namespace App\Http\Controllers\Backend;

use App\Models\Homepagebanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepagebannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $banners = Homepagebanner::all();
        return view('backend.homepagebanner', compact('banners'));
    }

    public function store () 
    {
        $data = request()->validate([
            'title_en'      => 'required',
            'title_bn'      => 'required',
            'subtitle_en'   => 'required',
            'subtitle_bn'   => 'required',
            'image'         => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $image = $data['image'];
        $name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/', $name);
        $data['image'] = $name;
        Homepagebanner::create($data);
        return back()->with('success', 'Home Page banner Created Successfully');
    }

    public function edit (Request $request)
    {
        $data = request()->validate([
            'title_en'      => 'required',
            'title_bn'      => 'required',
            'subtitle_en'   => 'required',
            'subtitle_bn'   => 'required',
            'image'         => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $oldimage = $request->oldimg;
        if (isset($data['image'])) {
            unlink('uploads/' . $oldimage);
            $image = $data['image'];
            $name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $name);
            $data['image'] = $name;
        } else {
            $data['image'] = $oldimage;
        }
        Homepagebanner::where('id', $request->id)->update($data);
        return redirect()->back()->with('success', 'Home Page Banner Updated Successfully');
    }

    public function destroy ($id)
    {
        $banner = Homepagebanner::find($id);
        unlink('uploads/' . $banner->image);
        Homepagebanner::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Home Page Banner Deleted Successfully.');
    }
}