<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\Milestone;

class MilestoneController extends Controller
{
    public function index(){
        $milestone = Milestone::first();
        return view('backend.more.aboutus.milestone.index', compact('milestone'));
    }

    public function edit($id){
        $milestone = Milestone::findOrFail($id);
        return view('backend.more.aboutus.milestone.edit', compact('milestone'));
    }
    public function update(Request $request){
        
        try {
            $milestone = Milestone::findOrFail($request->id);
            if($request->has('image')){
                unlink('uploads/aboutus/' . $milestone->image);
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/aboutus/', $imageName);
                $milestone->image = $imageName;
            }
            $milestone->description_en = $request->description_en;
            $milestone->description_bn = $request->description_bn;
            $milestone->update();
            return redirect()->route("aboutus.milestone.home")->with('success', 'Milestone Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
