<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\StuffList;

class StuffListController extends Controller
{
    public function index(){
        $stuffList = StuffList::first();
        return view('backend.more.aboutus.stuff-list.index', compact('stuffList'));
    }

    public function edit($id){
        $stuffList = StuffList::findOrFail($id);
        return view('backend.more.aboutus.stuff-list.edit', compact('stuffList'));
    }
    public function update(Request $request){
        
        try {
            $stuffList = StuffList::findOrFail($request->id);
            // dd($stuffList);
            if($request->has('image')){
                unlink('uploads/aboutus/' . $stuffList->image);
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/aboutus/', $imageName);
                $stuffList->image = $imageName;
            }
            $stuffList->description_en = $request->description_en;
            $stuffList->description_bn = $request->description_bn;
            $stuffList->update();
            return redirect()->route("aboutus.stuffList.home")->with('success', 'Stuff List Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
