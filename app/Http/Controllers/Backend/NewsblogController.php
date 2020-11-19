<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsblog;

class NewsblogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $blogs = Newsblog::all();
        return view('backend.newsblog', compact('blogs'));
    }

    public function store () 
    {
        $data = request()->validate([
            'title_en'        => 'required',
            'title_bn'        => 'required',
            'description_en'  => 'required',
            'description_bn'  => 'required',
            'type'            => 'required',
            'image'           => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $image = $data['image'];
        $name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/', $name);
        $data['image'] = $name;

        Newsblog::create($data);
        return back()->with('success', 'News & Blog Created Successfully');
    }

    public function edit (Request $request)
    {
        $data = request()->validate([
            'title_en'        => 'required',
            'title_bn'        => 'required',
            'description_en'  => 'required',
            'description_bn'  => 'required',
            'type'            => 'required',
            'image'           => 'required|image|mimes:jpeg,jpg,png',
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
        Newsblog::where('id', $request->id)->update($data);
        return redirect()->back()->with('success', 'News & Blog Updated Successfully');
    }

    public function destroy ($id)
    {
        $blog = Newsblog::find($id);
        unlink('uploads/' . $blog->image);
        Newsblog::where('id', $id)->delete();
        return redirect()->back()->with('success', 'News & Blog Deleted Successfully.');
    }
}