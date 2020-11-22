<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\ShareHolder;
use App\Models\AboutUs\ShareholderHeading;

class ShareholderController extends Controller
{
    public function index(){
        $shareholders = ShareHolder::get();
        $shareholderHeading = ShareholderHeading::first();
        return view('backend.more.aboutus.shareholders.index', compact('shareholders', 'shareholderHeading'));
    }
    public function addForm(){
        return view('backend.more.aboutus.shareholders.add');
    }
  
    public function store(Request $request){
        // dd($request->all());
        try {
            $shareHolder = new ShareHolder;
            $shareHolder->name_en = $request->name_en;
            $shareHolder->name_bn = $request->name_bn;
            $shareHolder->numberOfShares = $request->numberOfShare;
            $shareHolder->percentageOfShares = $request->percentageOfShare;
            $shareHolder->status = $request->status;
            $shareHolder->save();
            return redirect()->route("aboutus.shareholders.home")->with('success', 'Shareholder Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    
    }
    public function edit($id){
        $shareholder = ShareHolder::findOrFail($id);
        return view('backend.more.aboutus.shareholders.edit', compact('shareholder'));
    }
    public function update(Request $request){
        try {
            $shareHolder = ShareHolder::findOrFail($request->id);
            $shareHolder->name_en = $request->name_en;
            $shareHolder->name_bn = $request->name_bn;
            $shareHolder->numberOfShares = $request->numberOfShare;
            $shareHolder->percentageOfShares = $request->percentageOfShare;
            $shareHolder->status = $request->status;
            $shareHolder->update();
            return redirect()->route("aboutus.shareholders.home")->with('success', 'Shareholder Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    public function delete($id){
        try {
            $shareHolder = ShareHolder::findOrFail($id);
            $shareHolder->delete();
            return redirect()->route("aboutus.shareholders.home")->with('success', 'Shareholder Delete Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }


    // Heading
    public function editHeading($id){
        $shareholderHeading = ShareholderHeading::findOrFail($id);
        return view('backend.more.aboutus.shareholders.edit-heading', compact('shareholderHeading'));
    }
    public function updateHeading(Request $request){
        try {
            $shareholderHeading = ShareholderHeading::findOrFail($request->id);
            $shareholderHeading->description_en = $request->description_en;
            $shareholderHeading->description_bn = $request->description_bn;
            $shareholderHeading->update();
            return redirect()->route("aboutus.shareholders.home")->with('success', 'Shareholder Heading Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
