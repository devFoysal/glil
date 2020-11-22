<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\CoreValues;

class CoreValuesController extends Controller
{
    public function index(){
        $coreValue = CoreValues::get();
        return view('backend.more.aboutus.core-values.index', compact('coreValue'));
    }

    public function edit($id){
        $coreValue = CoreValues::findOrFail($id);
        return view('backend.more.aboutus.core-values.edit', compact('coreValue'));
    }
    public function update(Request $request){
        try {
            $coreValue = CoreValues::findOrFail($request->id);
            $coreValue->description_en = $request->description_en;
            $coreValue->description_bn = $request->description_bn;
            $coreValue->status = $request->status;
            $coreValue->update();
            return redirect()->route("aboutus.coreValues.home")->with('success', 'Core Value Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}