<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\CitizenCharter;

class CitizenCharterController extends Controller
{
    public function index(){
        $citizenCharter = CitizenCharter::first();
        return view('backend.more.aboutus.citizen-charter.index', compact('citizenCharter'));
    }

    public function edit($id){
        $citizenCharter = CitizenCharter::findOrFail($id);
        return view('backend.more.aboutus.citizen-charter.edit', compact('citizenCharter'));
    }
    public function update(Request $request){
        
        try {
            $citizenCharter = CitizenCharter::findOrFail($request->id);
            if($request->has('files')){
                unlink('uploads/aboutus/' . $citizenCharter->files);
                $image = $request->file('files');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/aboutus/', $imageName);
                $citizenCharter->files = $imageName;
            }
            $citizenCharter->title_en = $request->title_en;
            $citizenCharter->title_bn = $request->title_bn;
            $citizenCharter->update();
            return redirect()->route("aboutus.citizen-charter.home")->with('success', 'Citizen Charter Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}