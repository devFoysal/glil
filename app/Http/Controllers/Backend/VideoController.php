<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
    public function index ()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        return view('backend.videos.index', compact('videos'));
    }

    public function addForm(){
        return view('backend.videos.add');
    }

    public function store (Request $request) 
    {
        try {
            $video = new Video;
            $video->type = $request->type;
            $video->title_en = $request->title_en;
            $video->title_bn = $request->title_bn;
            $video->video = $request->video;
            $video->status = $request->status;
            $video->created_at = Carbon::now();

            $video->save();
            return redirect()->route("videos.home")->with('success', 'Video Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function edit ($id)
    {   
        $video = Video::findOrFail($id);   
        return view('backend.videos.edit', compact('video'));
    }

    public function update (Request $request)
    {
        try {
            $video = Video::findOrFail($request->id);
            $video->type = $request->type;
            $video->title_en = $request->title_en;
            $video->title_bn = $request->title_bn;
            $video->video = $request->video;
            $video->status = $request->status;
            $video->updated_at = Carbon::now();
            $video->update();

            return redirect()->route("videos.home")->with('success', 'Video Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function destroy ($id)
    {
        try {
            $video = Video::find($id);
            $video->delete();
            return redirect()->route("videos.home")->with('success', 'Video Deleted Successfully.');
        } catch (\Throwable $th) {
            return redirect()->route("videos.add")->withError($th->getMessage())->withInput();
        }
    }
}
