<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\AboutUs\WhoWeAre;
use App\Models\AboutUs\GuardianValies;

class WheWeAreController extends Controller
{
    public function index(){
        $whoWeAres = WhoWeAre::get();
        $guardianValues = GuardianValies::get();
        return view('backend.more.aboutus.who-we-are.index', compact('whoWeAres', 'guardianValues'));
    }
    public function addForm(){
        return view('backend.more.aboutus.who-we-are.add');
    }
    public function store(Request $request){
        try {
            $whoWeAre = new WhoWeAre;
            $whoWeAre->description_en = $request->description_en;
            $whoWeAre->description_bn = $request->description_bn;
            $whoWeAre->sponsors = $request->sponsors;
            $whoWeAre->video = $request->video;
            $whoWeAre->status = $request->status;
            $whoWeAre->save();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Who We Are Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    
    }
    public function edit($id){
        $whoWeAre = WhoWeAre::findOrFail($id);
        return view('backend.more.aboutus.who-we-are.edit', compact('whoWeAre'));
    }
    public function update(Request $request){
        try {
            $whoWeAre = WhoWeAre::findOrFail($request->id);
            $whoWeAre->description_en = $request->description_en;
            $whoWeAre->description_bn = $request->description_bn;
            $whoWeAre->sponsors = $request->sponsors;
            $whoWeAre->video = $request->video;
            $whoWeAre->status = $request->status;
            $whoWeAre->update();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Who We Are Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    public function delete($id){
        try {
            $whoWeAre = WhoWeAre::findOrFail($id);
            $whoWeAre->delete();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Who We Are Delete Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function addGVForm(){
        return view('backend.more.aboutus.who-we-are.guardian-value.add');
    }
    public function gvStore(Request $request){
        try {
            $gv = new GuardianValies;
            $gv->description_en = $request->description_en;
            $gv->description_bn = $request->description_bn;
            $gv->status = $request->status;
            $gv->save();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Guardian Value Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    
    }
    public function gvEdit($id){
        $gv = GuardianValies::findOrFail($id);
        return view('backend.more.aboutus.who-we-are.guardian-value.edit', compact('gv'));
    }
    public function gvUpdate(Request $request){
        try {
            $gv = GuardianValies::findOrFail($request->id);
            $gv->description_en = $request->description_en;
            $gv->description_bn = $request->description_bn;
            $gv->status = $request->status;
            $gv->update();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Guardian Value Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    public function gvDelete($id){
        try {
            $gv = GuardianValies::findOrFail($id);
            $gv->delete();
            return redirect()->route("aboutus.whoWeAre.home")->with('success', 'Guardian Value Delete Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    
}
