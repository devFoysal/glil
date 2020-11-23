<?php

namespace App\Http\Controllers\Backend\Claims;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageHandleTraits;
use App\Models\Claims\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    use ImageHandleTraits;
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        $claim = Claim::all();

        return view('backend.claims.claim.index',compact('claim'));
    }

    public function edit() {

        $claim = Claim::find(1);       
        return view('backend.claims.claim.edit', compact('claim'));
    }

    public function update(Request $request) {
        $claim = Claim::find(1);

          // Validation Data
          $request->validate([
            'name_en'        => 'required',
            'banner'           => 'sometimes|image|mimes:jpeg,jpg,png',
           
        ]);

        $claim->banner_title_en = $request->banner_title_en;
        $claim->name_en = $request->name_en;

        $claim->banner_title_bn = $request->banner_title_bn;
        $claim->name_bn = $request->name_bn;


        if ($request->file('banner')) {
            if (!empty($claim->banner)) {
                $this->deleteImage($claim->banner,'claim');
            }
            $claim->banner =    $this->uploadImage($request->file('banner'), 'uploads/claim/');
        }

        $claim->save();

        return redirect(route('claims.claim.home'))->with('success', 'claim Page  Updated  Successfully');


    }
}