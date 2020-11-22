<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\ManagementTeam;
use App\Models\AboutUs\ManagementTeamHeading;

class ManagementTeamController extends Controller
{
    public function index(){
        $managementTeams = ManagementTeam::orderBy('orders', 'asc')->get();
        $mtHeading = ManagementTeamHeading::first();
        return view('backend.more.aboutus.team.index', compact('managementTeams', 'mtHeading'));
    }
    public function addForm(){
        return view('backend.more.aboutus.team.add');
    }
  
    public function store(Request $request){
        // dd($request->all());
        try {
            $mTeam = new ManagementTeam;
            if($request->has('image')){
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/management-team/', $imageName);
                $mTeam->image = $imageName;
            }
            $mTeam->name_en = $request->name_en;
            $mTeam->name_bn = $request->name_bn;
            $mTeam->designation_en = $request->designation_en;
            $mTeam->designation_bn = $request->designation_bn;
            $mTeam->orders = $request->orders;
            $mTeam->status = $request->status;
            $mTeam->save();
            return redirect()->route("aboutus.managementTeam.home")->with('success', 'Team Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    
    }
    public function edit($id){
        $mTeam = ManagementTeam::findOrFail($id);
        return view('backend.more.aboutus.team.edit', compact('mTeam'));
    }
    public function update(Request $request){
        try {
            $mTeam = ManagementTeam::findOrFail($request->id);
            if($request->has('image')){
                unlink('uploads/management-team/' . $mTeam->image);
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/management-team/', $imageName);
                $mTeam->image = $imageName;
            }
            $mTeam->name_en = $request->name_en;
            $mTeam->name_bn = $request->name_bn;
            $mTeam->designation_en = $request->designation_en;
            $mTeam->designation_bn = $request->designation_bn;
            $mTeam->orders = $request->orders;
            $mTeam->status = $request->status;
            $mTeam->update();
            return redirect()->route("aboutus.managementTeam.home")->with('success', 'Team Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    public function delete($id){
        try {
            $mTeam = ManagementTeam::findOrFail($id);
            $mTeam->delete();
            unlink('uploads/management-team/' . $mTeam->image);
            return redirect()->route("aboutus.managementTeam.home")->with('success', 'Team Delete Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }


    // Heading
    public function editHeading($id){
        $mTeamHeading = ManagementTeamHeading::findOrFail($id);
        return view('backend.more.aboutus.team.edit-heading', compact('mTeamHeading'));
    }
    public function updateHeading(Request $request){
        try {
            $mTeamHeading = ManagementTeamHeading::findOrFail($request->id);
            $mTeamHeading->description_en = $request->description_en;
            $mTeamHeading->description_bn = $request->description_bn;
            $mTeamHeading->update();
            return redirect()->route("aboutus.managementTeam.home")->with('success', 'Team Heading Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}