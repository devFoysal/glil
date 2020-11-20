<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsblog;
use Carbon\Carbon;
use Str;

class NewsblogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $blogs = Newsblog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    public function addForm(){
        return view('backend.blog.add');
    }

    public function store (Request $request) 
    {
        try {
            $blog = new Newsblog;
            if($request->has('image')){
                $image =$request->file('image');
                $name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/blogs/thumbnail/', $name);
                $blog->image = $name;
            }
            

            if($request->has('cover_image')){
                $coverImage = $request->file('cover_image');
                $coverImageName = rand() . '.' . $coverImage->getClientOriginalExtension();
                $coverImage->move('uploads/blogs/cover/', $coverImageName);
                $blog->cover_image = $coverImageName;
            }

            $blog->type = $request->type;
            $blog->title_en = $request->title_en;
            $blog->title_bn = $request->title_bn;
            $blog->slug_en = Str::slug($request->title_en, '-');
            $blog->slug_bn = Str::slug($request->title_bn, '-');
            $blog->short_description_en = $request->short_description_en;
            $blog->short_description_bn = $request->short_description_bn;
            $blog->description_en = $request->description_en;
            $blog->description_bn = $request->description_bn;
            $blog->status = $request->status;
            $blog->created_at = Carbon::now();

            $blog->save();
            return redirect()->route("newsblog.home")->with('success', 'News & Blog Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function edit ($id)
    {   
        $blog = Newsblog::findOrFail($id);   
        return view('backend.blog.edit', compact('blog'));
    }

    public function update (Request $request)
    {
        try {
            $blog = Newsblog::findOrFail($request->id);
          
        
            if($request->has('image')){
                unlink('uploads/blogs/thumbnail/' . $oldimage);
                $image =$request->file('image');
                $name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/blogs/thumbnail/', $name);
                $blog->image = $name;
            }

            if($request->has('cover_image')){
                unlink('uploads/blogs/cover/' . $oldCoverimg);
                $coverImage = $request->file('cover_image');
                $coverImageName = rand() . '.' . $coverImage->getClientOriginalExtension();
                $coverImage->move('uploads/blogs/cover/', $coverImageName);
                $blog->cover_image = $coverImageName;
            }

            $blog->type = $request->type;
            $blog->title_en = $request->title_en;
            $blog->title_bn = $request->title_bn;
            $blog->slug_en = Str::slug($request->title_en, '-');
            $blog->slug_bn = Str::slug($request->title_bn, '-');
            $blog->short_description_en = $request->short_description_en;
            $blog->short_description_bn = $request->short_description_bn;
            $blog->description_en = $request->description_en;
            $blog->description_bn = $request->description_bn;
            $blog->status = $request->status;
            $blog->updated_at = Carbon::now();
            $blog->update();

            return redirect()->route("newsblog.home")->with('success', 'News & Blog Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function destroy ($id)
    {
        try {
            $blog = Newsblog::find($id);
            unlink('uploads/blogs/thumbnail/' . $blog->image);
            unlink('uploads/blogs/cover/' . $blog->cover_image);
            $blog->delete();
            return redirect()->route("newsblog.home")->with('success', 'News & Blog Deleted Successfully.');
        } catch (\Throwable $th) {
            return redirect()->route("newsblog.add")->withError($th->getMessage())->withInput();
        }
    }
}
