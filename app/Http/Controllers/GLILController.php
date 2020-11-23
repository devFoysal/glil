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
use App\Models\AboutUs\About;
use App\Models\Video;
use App\Models\AboutUs\CitizenCharter;
use App\Models\AboutUs\StuffList;
use App\Models\AboutUs\Milestone;
use App\Models\Newsletter;

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
        $aboutUs = About::first();
        $citizenCharter = CitizenCharter::first();
        $stuffList = StuffList::first();
        $milestone = Milestone::first();
        $videos = Video::where(['status' => 1, 'type' => 'aboutus'])->get();
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
            'aboutUs',
            'videos',
            'citizenCharter',
            'stuffList',
            'milestone',
        ]));
    }

    public function coronaVirus(){
        $videos = Video::where(['status' => 1, 'type' => 'corona-virus'])->get();
        return view("pages.awareness.index", compact('videos'));
    }
    
    public function mediaCorner(){
        $videos = Video::where(['status' => 1])->get();
        $newsBlogPress = Newsblog::where(['status' => 1])->get();
        return view("pages.mediaCorner.index", compact('newsBlogPress', 'videos'));
    }    
    
    public function newsletter(){
        $newsletter = Newsletter::first();
        return view("pages.newsletter.index", compact('newsletter'));
    }




    // Api
    public function premiumCalculator(){
        return view("pages.calculator.index");
    }
}
