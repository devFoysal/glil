<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\MissionVision;

class MissionVisionController extends Controller
{
    public function index(){
        $missionVision = MissionVision::get();
        return view('backend.more.aboutus.mission-vision.index', compact('missionVision'));
    }

    public function edit($id){
        $missionVision = MissionVision::findOrFail($id);
        return view('backend.more.aboutus.mission-vision.edit', compact('missionVision'));
    }
    public function update(Request $request){
        try {
            $missionVision = MissionVision::findOrFail($request->id);
            $missionVision->description_en = $request->description_en;
            $missionVision->description_bn = $request->description_bn;
            $missionVision->status = $request->status;
            $missionVision->update();
            return redirect()->route("aboutus.missionVision.home")->with('success', 'Mission Vision Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}