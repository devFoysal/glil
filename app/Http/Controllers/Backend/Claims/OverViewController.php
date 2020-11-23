<?php

namespace App\Http\Controllers\Backend\Claims;

use App\Http\Controllers\Controller;
use App\Models\Claims\OverView;
use Illuminate\Http\Request;

class OverViewController extends Controller
{
    public function edit() {

        $overview = OverView::find(1);       
        return view('backend.claims.overview.edit', compact('overview'));
    }

    public function update(Request $request) {
        $overview = OverView::find(1);

          // Validation Data
          $request->validate([
            'name_en' => 'required', 
            'description_en'        => 'required',
           
        ]);

        $overview->name_en = $request->name_en;
        $overview->name_bn = $request->name_bn;
        $overview->description_en = $request->description_en;
        $overview->description_bn = $request->description_bn;
        $overview->save();

        return redirect(route('claims.overview.edit'))->with('success', 'Overview Updated  Successfully');


    }
}