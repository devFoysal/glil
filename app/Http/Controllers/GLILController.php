<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Newsblog;
use App\Models\Corporate;
use App\Models\Corporateaccordion;

class GLILController extends Controller
{
    public function blogs(){
        $blogs = Newsblog::where(['type' => 'blog','status' => 1])->get();
        $recentBlogs = Newsblog::where(['type' => 'blog','status' => 1])->take(5)->get();
        return view("pages.blog.index", compact('blogs', 'recentBlogs'));
    }
    public function blog($locale, $id){
        $blog = Newsblog::where(['id' => $id, 'type' => 'blog','status' => 1])->first();
        $recentBlogs = Newsblog::where(['type' => 'blog','status' => 1])->take(5)->get();
        $blog->views = $blog->views + 1;
        $blog->update();
        return view("pages.blog.detail", compact('blog', 'recentBlogs'));
    }


    // Corporate Controller function
    public function corporate ()
    {
        $corporate = Corporate::find(1);
        $gtls = Corporateaccordion::where('page_link', 'Group Term Life')->get();
        $cibs = Corporateaccordion::where('page_link', 'Critical Illness Benefits')->get();
        $gmips = Corporateaccordion::where('page_link', 'Group Medical Insurance Plan')->get();
        $gpabs = Corporateaccordion::where('page_link', 'Group Personal Accident Benefit')->get();
        return view("pages.corporate.index", compact('corporate', 'gtls', 'cibs', 'gmips', 'gpabs'));
    }

    // Corporaate Single Pages view
    public function gtl ()
    {
        $corporate = Corporate::find(1);
        $gtls = Corporateaccordion::where('page_link', 'Group Term Life')->get();
        return view("pages.corporateSinglepage.groupTermLife.index", compact('corporate', 'gtls'));
    }

    public function cib ()
    {
        $corporate = Corporate::find(1);
        $cibs = Corporateaccordion::where('page_link', 'Critical Illness Benefits')->get();
        return view("pages.corporateSinglepage.criticalIllness.index", compact('corporate', 'cibs'));
    }

    public function gmips ()
    {
        $corporate = Corporate::find(1);
        $gmips = Corporateaccordion::where('page_link', 'Group Medical Insurance Plan')->get();
        return view("pages.corporateSinglepage.groupMedical.index", compact('corporate', 'gmips'));
    }

    public function gpabs ()
    {
        $corporate = Corporate::find(1);
        $gpabs = Corporateaccordion::where('page_link', 'Group Personal Accident Benefit')->get();
        return view("pages.corporateSinglepage.groupPersonal.index", compact('corporate', 'gpabs'));
    }
}
