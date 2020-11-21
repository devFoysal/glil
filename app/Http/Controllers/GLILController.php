<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Newsblog;

// Who we are
use App\Models\AboutUs\WhoWeAre;
use App\Models\AboutUs\GuardianValies;
use App\Models\AboutUs\ChairmanSpeech;
use App\Models\AboutUs\ShareHolder;
use App\Models\AboutUs\ShareholderHeading;
use App\Models\AboutUs\Director;
use App\Models\AboutUs\DirectorHeading;

use App\Models\AboutUs\ManagementTeam;
use App\Models\AboutUs\ManagementTeamHeading;
use App\Models\AboutUs\MissionVision;
use App\Models\AboutUs\CoreValues;

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


    // More menu items
    public function aboutUs(){
        $whoWeAres = WhoWeAre::where(['status' => 1])->take(1)->orderBy('id', 'asc')->first();
        $guardianValies = GuardianValies::where(['status' => 1])->orderBy('id', 'desc')->get();
        $chairmanSpeech = ChairmanSpeech::where(['status' => 1])->take(1)->orderBy('id', 'asc')->first();
        $shareholders = ShareHolder::where(['status' => 1])->orderBy('orders', 'asc')->get();
        $shareholderHeading = ShareholderHeading::first();
        $directors = Director::where(['status' => 1])->orderBy('orders', 'asc')->get();
        $directorHeading = DirectorHeading::first();

        $mTeams = ManagementTeam::where(['status' => 1])->orderBy('orders', 'asc')->get();
        $mtHeading = ManagementTeamHeading::first();
        $missionVision = MissionVision::first();
        $coreValues = CoreValues::first();
        return view("pages.aboutUs.index", compact([
            'whoWeAres', 
            'guardianValies',
            'chairmanSpeech',
            'shareholders',
            'shareholderHeading',
            'directors',
            'directorHeading',
            'mTeams',
            'mtHeading',
            'missionVision',
            'coreValues',
        ]));
    }
}
