<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs\About;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('backend.more.aboutus.about.index', compact('about'));
    }

    public function edit($id){
        $about = About::findOrFail($id);
        return view('backend.more.aboutus.about.edit', compact('about'));
    }
    public function update(Request $request){
        
        try {
            $about = About::findOrFail($request->id);
            if($request->has('banner')){
                unlink('uploads/aboutus/' . $about->banner);
                $image = $request->file('banner');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/aboutus/', $imageName);
                $about->banner = $imageName;
            }
            $about->livesCovered = $request->livesCovered;
            $about->paidInClaims = $request->paidInClaims;
            $about->claimPayoutRatio = $request->claimPayoutRatio;
            $about->update();
            return redirect()->route("aboutus.about.home")->with('success', 'About Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
