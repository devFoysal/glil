<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\ChairmanSpeech;

class OurChairmanController extends Controller
{
    public function index(){
        $chairmanSpeech = ChairmanSpeech::get();
        return view('backend.more.aboutus.chairman.index', compact('chairmanSpeech'));
    }
    public function edit($id){
        $chairmanSpeech = ChairmanSpeech::findOrFail($id);
        return view('backend.more.aboutus.chairman.edit', compact('chairmanSpeech'));
    }
    public function update(Request $request){
        try {
            $chairmanSpeech = ChairmanSpeech::findOrFail($request->id);
            $chairmanSpeech->description_en = $request->description_en;
            $chairmanSpeech->description_bn = $request->description_bn;
            $chairmanSpeech->status = $request->status;
            $chairmanSpeech->update();
            return redirect()->route("aboutus.ourChairman.home")->with('success', 'Chairman Speech Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
