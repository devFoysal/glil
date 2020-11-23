<?php

use App\Http\Controllers\ReatilFrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/en');
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'],function () {
    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index')->name('home');

    // Retail  &  Reatil Plan Route 

    Route::get('/retail', 'RetailController@index')->name('retail.index');
    Route::get('/retail/edit', 'RetailController@edit')->name('retail.edit');
    Route::put('/retail/edit', 'RetailController@update')->name('retail.update');


    Route::get('/retail-plan/', 'RetailPlanController@create')->name('retail.plan.create');
    Route::post('/retail-plan/add', 'RetailPlanController@store')->name('retail.plan.add');
    Route::get('/retail-plan/edit/{id}', 'RetailPlanController@edit')->name('retail.plan.edit');
    Route::put('/retail-plan/update', 'RetailPlanController@update')->name('retail.plan.update');
    Route::get('/retail-plan/{id}/destroy', 'RetailPlanController@destroy')->name('retail.plan.destroy');

    // Retail Plan List Route 
    Route::get('/retail-planlist/{planId}/', 'RetailPlanListController@index')->name('retail.planlist.index');
    Route::get('/retail-planlist/{planId}/create', 'RetailPlanListController@create')->name('retail.planlist.create');
    Route::post('/retail-planlist/{planId}/add', 'RetailPlanListController@store')->name('retail.planlist.add');
    Route::get('/retail-planlist/edit/{id}', 'RetailPlanListController@edit')->name('retail.planlist.edit');
    Route::put('/retail-planlist/{id}', 'RetailPlanListController@update')->name('retail.planlist.update');
    Route::get('/retail-planlist/{id}/destroy', 'RetailPlanListController@destroy')->name('retail.planlist.destroy');



    // Main Menu Routes
    Route::get('/menu', 'MenuController@index');

    Route::post('/menu/store', 'MenuController@store')->name('menu.store');

    Route::post('/menu/edit', 'MenuController@edit')->name('menu.edit');

    Route::get('/menu/{id}/destroy', 'MenuController@destroy')->name('menu.destroy');


    // Sub Menu Routes
    Route::get('/submenu', 'SubmenuController@index');

    Route::post('/submenu/store', 'SubmenuController@store')->name('submenu.store');

    Route::post('/submenu/edit', 'SubmenuController@edit')->name('submenu.edit');

    Route::get('/submenu/{id}/destroy', 'SubmenuController@destroy')->name('submenu.destroy');


    // Home Page Banner
    Route::get('/homepagebanner', 'HomepagebannerController@index');

    Route::post('/homepagebanner/store', 'HomepagebannerController@store')->name('homebanner.store');

    Route::post('/homepagebanner/edit', 'HomepagebannerController@edit')->name('homebanner.edit');

    Route::get('/homepagebanner/{id}/destroy', 'HomepagebannerController@destroy')->name('homebanner.destroy');
    
    
    // News Blog Routes
    Route::group(['prefix' => 'newsblog'], function(){
        Route::get('/', 'NewsblogController@index')->name('newsblog.home');
        Route::get('add', 'NewsblogController@addForm')->name('newsblog.add.form');
        Route::post('store', 'NewsblogController@store')->name('newsblog.store');
        Route::get('edit/{id}', 'NewsblogController@edit')->name('newsblog.edit');
        Route::post('update', 'NewsblogController@update')->name('newsblog.update');
        Route::get('destroy/{id}', 'NewsblogController@destroy')->name('newsblog.destroy');
    }); 

        // More menu items
        Route::group(['prefix' => 'claims'], function(){
            Route::get('/', 'Claims\ClaimController@index')->name('claims.claim.home');
            Route::get('/edit/', 'Claims\ClaimController@edit')->name('claims.claim.edit');
            Route::put('/update', 'Claims\ClaimController@update')->name('claims.claim.update');
        Route::group(['prefix' => 'overview'], function(){
            Route::get('/edit/', 'Claims\OverViewController@edit')->name('claims.overview.edit');
            Route::put('/update', 'Claims\OverViewController@update')->name('claims.overview.update');
        });

        Route::group(['prefix' => 'claimSubmission'], function(){
            Route::get('/edit/', 'Claims\claimSubmissionController@edit')->name('claims.claimSubmission.edit');
            Route::put('/update', 'Claims\claimSubmissionController@update')->name('claims.claimSubmission.update');
        });

        });
    
    // More menu items
    Route::group(['prefix' => 'aboutus'], function(){
        Route::get('/', 'AboutUs\AboutController@index')->name('aboutus.about.home');
        Route::get('/edit/{id}', 'AboutUs\AboutController@edit')->name('aboutus.about.edit');
        Route::post('/update', 'AboutUs\AboutController@update')->name('aboutus.about.update');
        Route::group(['prefix' => 'who-we-are'], function(){
            Route::get('/', 'AboutUs\WheWeAreController@index')->name('aboutus.whoWeAre.home');
            Route::get('/add-form', 'AboutUs\WheWeAreController@addForm')->name('aboutus.whoWeAre.addForm');
            Route::post('/store', 'AboutUs\WheWeAreController@store')->name('aboutus.whoWeAre.store');
            Route::get('/edit/{id}', 'AboutUs\WheWeAreController@edit')->name('aboutus.whoWeAre.edit');
            Route::post('/update', 'AboutUs\WheWeAreController@update')->name('aboutus.whoWeAre.update');
            Route::get('/delete/{id}', 'AboutUs\WheWeAreController@delete')->name('aboutus.whoWeAre.delete');
        });
        Route::group(['prefix' => 'gurdian-value'], function(){
            // Gurdian value
            Route::get('/add-form', 'AboutUs\WheWeAreController@addGVForm')->name('aboutus.whoWeAre.addGVForm');
            Route::post('/store', 'AboutUs\WheWeAreController@gvStore')->name('aboutus.whoWeAre.gvStore');
            Route::get('/edit/{id}', 'AboutUs\WheWeAreController@gvEdit')->name('aboutus.whoWeAre.gvEdit');
            Route::post('/update', 'AboutUs\WheWeAreController@gvUpdate')->name('aboutus.whoWeAre.gvUpdate');
            Route::get('/delete/{id}', 'AboutUs\WheWeAreController@gvDelete')->name('aboutus.whoWeAre.gvDelete');
        });
        Route::group(['prefix' => 'our-chairman'], function(){
            Route::get('/', 'AboutUs\OurChairmanController@index')->name('aboutus.ourChairman.home');
            Route::get('/add-form', 'AboutUs\OurChairmanController@addForm')->name('aboutus.ourChairman.addForm');
            Route::post('/store', 'AboutUs\OurChairmanController@store')->name('aboutus.ourChairman.store');
            Route::get('/edit/{id}', 'AboutUs\OurChairmanController@edit')->name('aboutus.ourChairman.edit');
            Route::post('/update', 'AboutUs\OurChairmanController@update')->name('aboutus.ourChairman.update');
            Route::get('/delete/{id}', 'AboutUs\OurChairmanController@delete')->name('aboutus.ourChairman.delete');
        });
        Route::group(['prefix' => 'shareholders'], function(){
            Route::get('/', 'AboutUs\ShareholderController@index')->name('aboutus.shareholders.home');
            Route::get('/add-form', 'AboutUs\ShareholderController@addForm')->name('aboutus.shareholders.addForm');
            Route::post('/store', 'AboutUs\ShareholderController@store')->name('aboutus.shareholders.store');
            Route::get('/edit/{id}', 'AboutUs\ShareholderController@edit')->name('aboutus.shareholders.edit');
            Route::post('/update', 'AboutUs\ShareholderController@update')->name('aboutus.shareholders.update');
            Route::get('/delete/{id}', 'AboutUs\ShareholderController@delete')->name('aboutus.shareholders.delete');
            // Header
            Route::get('/edit-heading/{id}', 'AboutUs\ShareholderController@editHeading')->name('aboutus.shareholders.edit-heading');
            Route::post('/update-heading', 'AboutUs\ShareholderController@updateHeading')->name('aboutus.shareholders.update-heading');
        });
        Route::group(['prefix' => 'board-of-directors'], function(){
            Route::get('/', 'AboutUs\DirectorsController@index')->name('aboutus.boardOfDirectors.home');
            Route::get('/add-form', 'AboutUs\DirectorsController@addForm')->name('aboutus.boardOfDirectors.addForm');
            Route::post('/store', 'AboutUs\DirectorsController@store')->name('aboutus.boardOfDirectors.store');
            Route::get('/edit/{id}', 'AboutUs\DirectorsController@edit')->name('aboutus.boardOfDirectors.edit');
            Route::post('/update', 'AboutUs\DirectorsController@update')->name('aboutus.boardOfDirectors.update');
            Route::get('/delete/{id}', 'AboutUs\DirectorsController@delete')->name('aboutus.boardOfDirectors.delete');

            // Header
            Route::get('/edit-heading/{id}', 'AboutUs\DirectorsController@editHeading')->name('aboutus.boardOfDirectors.edit-heading');
            Route::post('/update-heading', 'AboutUs\DirectorsController@updateHeading')->name('aboutus.boardOfDirectors.update-heading');
        });
        Route::group(['prefix' => 'management-team'], function(){
            Route::get('/', 'AboutUs\ManagementTeamController@index')->name('aboutus.managementTeam.home');
            Route::get('/add-form', 'AboutUs\ManagementTeamController@addForm')->name('aboutus.managementTeam.addForm');
            Route::post('/store', 'AboutUs\ManagementTeamController@store')->name('aboutus.managementTeam.store');
            Route::get('/edit/{id}', 'AboutUs\ManagementTeamController@edit')->name('aboutus.managementTeam.edit');
            Route::post('/update', 'AboutUs\ManagementTeamController@update')->name('aboutus.managementTeam.update');
            Route::get('/delete/{id}', 'AboutUs\ManagementTeamController@delete')->name('aboutus.managementTeam.delete');

            // Header
            Route::get('/edit-heading/{id}', 'AboutUs\ManagementTeamController@editHeading')->name('aboutus.managementTeam.edit-heading');
            Route::post('/update-heading', 'AboutUs\ManagementTeamController@updateHeading')->name('aboutus.managementTeam.update-heading');
        });
        Route::group(['prefix' => 'stuff-list'], function(){
            Route::get('/', 'AboutUs\StuffListController@index')->name('aboutus.stuffList.home');
            Route::get('/add-form', 'AboutUs\StuffListController@addForm')->name('aboutus.stuffList.addForm');
            Route::post('/store', 'AboutUs\StuffListController@store')->name('aboutus.stuffList.store');
            Route::get('/edit/{id}', 'AboutUs\StuffListController@edit')->name('aboutus.stuffList.edit');
            Route::post('/update', 'AboutUs\StuffListController@update')->name('aboutus.stuffList.update');
            Route::get('/delete/{id}', 'AboutUs\StuffListController@delete')->name('aboutus.stuffList.delete');
        });
        Route::group(['prefix' => 'mission-vision'], function(){
            Route::get('/', 'AboutUs\MissionVisionController@index')->name('aboutus.missionVision.home');
            Route::get('/add-form', 'AboutUs\MissionVisionController@addForm')->name('aboutus.missionVision.addForm');
            Route::post('/store', 'AboutUs\MissionVisionController@store')->name('aboutus.missionVision.store');
            Route::get('/edit/{id}', 'AboutUs\MissionVisionController@edit')->name('aboutus.missionVision.edit');
            Route::post('/update', 'AboutUs\MissionVisionController@update')->name('aboutus.missionVision.update');
            Route::get('/delete/{id}', 'AboutUs\MissionVisionController@delete')->name('aboutus.missionVision.delete');
        });
        Route::group(['prefix' => 'citizen-charter'], function(){
            Route::get('/', 'AboutUs\CitizenCharterController@index')->name('aboutus.citizenCharter.home');
            Route::get('/add-form', 'AboutUs\CitizenCharterController@addForm')->name('aboutus.citizenCharter.addForm');
            Route::post('/store', 'AboutUs\CitizenCharterController@store')->name('aboutus.citizenCharter.store');
            Route::get('/edit/{id}', 'AboutUs\CitizenCharterController@edit')->name('aboutus.citizenCharter.edit');
            Route::post('/update', 'AboutUs\CitizenCharterController@update')->name('aboutus.citizenCharter.update');
            Route::get('/delete/{id}', 'AboutUs\CitizenCharterController@delete')->name('aboutus.citizenCharter.delete');
        });
        Route::group(['prefix' => 'core-values'], function(){
            Route::get('/', 'AboutUs\CoreValuesController@index')->name('aboutus.coreValues.home');
            Route::get('/add-form', 'AboutUs\CoreValuesController@addForm')->name('aboutus.coreValues.addForm');
            Route::post('/store', 'AboutUs\CoreValuesController@store')->name('aboutus.coreValues.store');
            Route::get('/edit/{id}', 'AboutUs\CoreValuesController@edit')->name('aboutus.coreValues.edit');
            Route::post('/update', 'AboutUs\CoreValuesController@update')->name('aboutus.coreValues.update');
            Route::get('/delete/{id}', 'AboutUs\CoreValuesController@delete')->name('aboutus.coreValues.delete');
        });
        Route::group(['prefix' => 'milestone'], function(){
            Route::get('/', 'AboutUs\MilestoneController@index')->name('aboutus.milestone.home');
            Route::get('/add-form', 'AboutUs\MilestoneController@addForm')->name('aboutus.milestone.addForm');
            Route::post('/store', 'AboutUs\MilestoneController@store')->name('aboutus.milestone.store');
            Route::get('/edit/{id}', 'AboutUs\MilestoneController@edit')->name('aboutus.milestone.edit');
            Route::post('/update', 'AboutUs\MilestoneController@update')->name('aboutus.milestone.update');
            Route::get('/delete/{id}', 'AboutUs\MilestoneController@delete')->name('aboutus.milestone.delete');
        });
    }); 

    Route::group(['prefix' => 'videos'], function(){
        Route::get('/', 'VideoController@index')->name('videos.home');
        Route::get('/add-form', 'VideoController@addForm')->name('videos.addForm');
        Route::post('/store', 'VideoController@store')->name('videos.store');
        Route::get('/edit/{id}', 'VideoController@edit')->name('videos.edit');
        Route::post('/update', 'VideoController@update')->name('videos.update');
        Route::get('/delete/{id}', 'VideoController@delete')->name('videos.delete');
    });

    Route::group(['prefix' => 'newsletter'], function(){
        Route::get('/', 'newsletterController@index')->name('newsletter.home');
        Route::get('/edit/{id}', 'newsletterController@edit')->name('newsletter.edit');
        Route::post('/update', 'newsletterController@update')->name('newsletter.update');
        Route::get('/delete/{id}', 'newsletterController@delete')->name('newsletter.delete');
    });  
    
    // Corporate Routes
    Route::group(['prefix' => 'corporate'], function(){

        Route::get('/', 'CorporateController@index')->name('corporate.index');

        Route::get('edit/{id}', 'CorporateController@edit')->name('corporate.edit');

        Route::post('update', 'CorporateController@update')->name('corporate.update');

        Route::group(['prefix' => 'accordion'], function(){

            Route::get('create', 'CorporateController@createaccordion')->name('corporateaccordion.create');

            Route::post('store', 'CorporateController@storeaccordion')->name('corporateaccordion.store');

            Route::get('edit/{id}', 'CorporateController@editaccordion')->name('corporateaccordion.edit');
    
            Route::post('update', 'CorporateController@updateaccordion')->name('corporateaccordion.update');

            Route::get('destory/{id}', 'CorporateController@destroyaccordion')->name('corporateaccordion.destroy');
        });
    });


    // Bancassurance Routes
    Route::group(['prefix' => 'bancassurance'], function() {

        Route::get('/', 'BancassuranceController@index')->name('bancassurance.index');

        Route::get('edit/{id}', 'BancassuranceController@edit')->name('bancassurance.edit');

        Route::post('update', 'BancassuranceController@update')->name('corporate.update');

        Route::group(['prefix' => 'accordion'], function(){

            Route::get('create', 'BancassuranceController@createaccordion')->name('corporateaccordion.create');

            Route::post('store', 'BancassuranceController@storeaccordion')->name('corporateaccordion.store');

            Route::get('edit/{id}', 'BancassuranceController@editaccordion')->name('corporateaccordion.edit');
    
            Route::post('update', 'BancassuranceController@updateaccordion')->name('corporateaccordion.update');

            Route::get('destory/{id}', 'BancassuranceController@destroyaccordion')->name('corporateaccordion.destroy');
        });
     
    });
});




Route::group(['prefix' => '{language}', 'namespace' => 'App\Http\Controllers'], function(){

    Route::get('/', 'HomeFrontController@index')->name('homepage');

    Route::get('/retail','ReatilFrontController@showRetail')->name("retail"); 

    // Route::get('/corporate', function(){
    //     return view("pages.corporate.index");
    // })->name("corporate"); 

    Route::get('/bancassurance', function(){
        return view("pages.home.index");
    })->name("bancassurance"); 

    Route::get('/micro-insurance', function(){
        return view("pages.microinsurance.index");
    })->name("microinsurance");

    Route::get('/bancassurance', function(){
        return view("pages.bancassurance.index");
    })->name("bancassurance");   

    Route::get('/about-us', 'GLILController@aboutUs')->name("aboutUs");

    Route::get('/book-appointment', function(){
        return view("pages.bookAppointment.index");
    })->name("bookAppointment");

    Route::get('/confirm-appointment', function(){
        return view("pages.appointmentConfirm.index");
    })->name("confirmAppointment");

    Route::get('/policy-info', function(){
        return view("pages.policyInformation.index");
    })->name("policyInfo");

    Route::get('/news-event', function(){
        return view("pages.newsEvent.index");
    })->name("newsEvent");

    Route::get('/claims','ClaimFrontController@index')->name("claims");

    Route::get('/faq', function(){
        return view("pages.faq.index");
    })->name("faq");
    Route::get('/career', function(){
        return view("pages.career.index");
    })->name("career");

    // details route
    Route::get('/retirements-details', function(){
        return view("pages.details.retirement.index");
    })->name("retirementsDetails");
    Route::get('/child-protection-details', function(){
        return view("pages.details.children.index");
    })->name("childProtectionDetails");
    Route::get('/gurdian-sanchay', function(){
        return view("pages.details.savings.gurdianSanchay.index");
    })->name("gurdianSanchay");
    Route::get('/gurdian-probridhi', function(){
        return view("pages.details.savings.gurdianProbridhi.index");
    })->name("gurdianProbridhi");
    Route::get('/gurdian-somriddhi', function(){
        return view("pages.details.savings.gurdianSomriddhi.index");
    })->name("gurdianSomriddhi");
    Route::get('/gurdian-moneyback', function(){
        return view("pages.details.savings.gurdianMoneyback.index");
    })->name("gurdianMoneyback");
    Route::get('/gurdian-care-free', function(){
        return view("pages.details.earlyCash.free.index");
    })->name("gurdianCareFree");
    Route::get('/gurdian-care-pro', function(){
        return view("pages.details.earlyCash.pro.index");
    })->name("gurdianCarePro");
    Route::get('/gurdian-care-ultra', function(){
        return view("pages.details.earlyCash.ultra.index");
    })->name("gurdianCareUltra");
    Route::get('/gurdian-health-insurance', function(){
        return view("pages.details.supplymentary.gurdianHealth.index");
    })->name("gurdianHealth");
    Route::get('/critical-illness', function(){
        return view("pages.details.supplymentary.criticalIllness.index");
    })->name("criticalIllness");
    Route::get('/permanent-disability-accidental-benefit', function(){
        return view("pages.details.supplymentary.pdab.index");
    })->name("pdab");
    Route::get('/double-indemnity-accidental-benefit', function(){
        return view("pages.details.supplymentary.diab.index");
    })->name("diab");
    Route::get('/gurdian-surokkha', function(){
        return view("pages.details.investment.index");
    })->name("gurdianSurokkha");

    // Retails Single Page
    Route::get('retail/{plan}','ReatilFrontController@showPlan');

    Route::get('retail/{plan}/{list}','ReatilFrontController@showPlanList');
    
    Route::get('/savings', function(){
        return view("pages.retailSinglePage.savings.index");
    })->name("savings");

    Route::get('/early-cash', function(){
        return view("pages.retailSinglePage.earlyCash.index");
    })->name("earlyCash");
    Route::get('/children', function(){
        return view("pages.retailSinglePage.children.index");
    })->name("children");
    Route::get('/retirement', function(){
        return view("pages.retailSinglePage.retirement.index");
    })->name("retirement");
    Route::get('/investment', function(){
        return view("pages.retailSinglePage.investment.index");
    })->name("investment");
    Route::get('/supplymentary-benefits', function(){
        return view("pages.retailSinglePage.supplymentary.index");
    })->name("supplymentary");

    

    // more page
    Route::get('/media-corner', 'GLILController@mediaCorner')->name("mediaCorner");

    Route::get('/financials', function(){
        return view("pages.financials.index");
    })->name("financials");

    Route::get('/newsletter', 'GLILController@newsletter')->name("newsLetter");

    Route::get('/corona-virus-awareness', 'GLILController@coronaVirus')->name("coronaVirus");

    Route::get('/supports', function(){
        return view("pages.supports.index");
    })->name("supports");

    // contact us
    Route::get('/contact-us', function(){
        return view("pages.contact.index");
    })->name("contactUs");

    // Blog
    Route::get('/blogs','GLILController@blogs')->name("blogs");
    Route::get('/blog/{id}','GLILController@blog')->name("blog.detail");



    // Corporate FrontView
    Route::get('/corporate', 'GLILController@corporate')->name("corporate"); 
    
    // Corporate Single Page
    Route::get('/group-term-life', 'GLILController@gtl')->name("groupTermLife");
    
    Route::get('/critical-illness-benefit', 'GLILController@cib')->name("criticalIllnessBenefit");

    Route::get('/group-medical-insurance', 'GLILController@gmips')->name("groupMedical");

    Route::get('/group-personal-accident', 'GLILController@gpabs')->name("groupPersonal");

    
    Route::get('/csr-activities', function(){
        return view("pages.csr.index");
    })->name("CSR");    
    
    Route::get('/premium-calculator', 'GLILController@premiumCalculator')->name("premiumCalculator");

});


//  Backend Route Controll 