<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AboutUs\Director;
use App\Models\AboutUs\DirectorHeading;

class DirectorsController extends Controller
{
    public function index(){
        $directors = Director::orderBy('orders', 'asc')->get();
        $directorHeading = DirectorHeading::first();
        return view('backend.more.aboutus.directors.index', compact('directors', 'directorHeading'));
    }
    public function addForm(){
        return view('backend.more.aboutus.directors.add');
    }
  
    public function store(Request $request){
        // dd($request->all());
        try {
            $director = new Director;
            if($request->has('image')){
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/board-of-directors/', $imageName);
                $director->image = $imageName;
            }
            $director->name_en = $request->name_en;
            $director->name_bn = $request->name_bn;
            $director->designation_en = $request->designation_en;
            $director->designation_bn = $request->designation_bn;
            $director->orders = $request->orders;
            $director->status = $request->status;
            $director->save();
            return redirect()->route("aboutus.boardOfDirectors.home")->with('success', 'Director Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    
    }
    public function edit($id){
        $director = Director::findOrFail($id);
        return view('backend.more.aboutus.directors.edit', compact('director'));
    }
    public function update(Request $request){
        try {
            $director = Director::findOrFail($request->id);
            if($request->has('image')){
                unlink('uploads/board-of-directors/' . $director->image);
                $image = $request->file('image');
                $imageName = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/board-of-directors/', $imageName);
                $director->image = $imageName;
            }
            $director->name_en = $request->name_en;
            $director->name_bn = $request->name_bn;
            $director->designation_en = $request->designation_en;
            $director->designation_bn = $request->designation_bn;
            $director->orders = $request->orders;
            $director->status = $request->status;
            $director->update();
            return redirect()->route("aboutus.boardOfDirectors.home")->with('success', 'Director Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
    public function delete($id){
        try {
            $director = Director::findOrFail($id);
            $director->delete();
            unlink('uploads/board-of-directors/' . $director->image);
            return redirect()->route("aboutus.boardOfDirectors.home")->with('success', 'Director Delete Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }


    // Heading
    public function editHeading($id){
        $directorHeading = DirectorHeading::findOrFail($id);
        return view('backend.more.aboutus.directors.edit-heading', compact('directorHeading'));
    }
    public function updateHeading(Request $request){
        try {
            $directorHeading = DirectorHeading::findOrFail($request->id);
            $directorHeading->description_en = $request->description_en;
            $directorHeading->description_bn = $request->description_bn;
            $directorHeading->update();
            return redirect()->route("aboutus.boardOfDirectors.home")->with('success', 'Director Heading Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
