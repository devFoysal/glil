<?php

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

// Backend Route
Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\Backend'],function () {
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


    // // Tab Menu Routes
    // Route::get('/tabmenu', 'TabmenuController@index');

    // Route::post('/tabmenu/store', 'TabmenuController@store')->name('tabmenu.store');

    // Route::post('/tabmenu/edit', 'TabmenuController@edit')->name('tabmenu.edit');

    // Route::get('/tabmenu/{id}/destroy', 'TabmenuController@destroy')->name('tabmenu.destroy');


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
});




Route::group(['prefix' => '{language}', 'namespace' => 'App\Http\Controllers'], function(){

    Route::get('/', function(){
        return view("pages.home.index");
    });

    Route::get('/retail', function(){
        return view("pages.retail.index");
    })->name("retail"); 

    Route::get('/corporate', function(){
        return view("pages.corporate.index");
    })->name("corporate"); 

    Route::get('/bancassurance', function(){
        return view("pages.home.index");
    })->name("bancassurance"); 

    Route::get('/micro-insurance', function(){
        return view("pages.microinsurance.index");
    })->name("microinsurance");

    Route::get('/bancassurance', function(){
        return view("pages.bancassurance.index");
    })->name("bancassurance");   

    Route::get('/about-us', function(){
        return view("pages.aboutUs.index");
    })->name("aboutUs");

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

    Route::get('/claims', function(){
        return view("pages.claims.index");
    })->name("claims");

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

    // Corporate Single Page
    Route::get('/group-term-life', function(){
        return view("pages.corporateSinglepage.groupTermLife.index");
    })->name("groupTermLife");
    Route::get('/critical-illness-benefit', function(){
        return view("pages.corporateSinglepage.criticalIllness.index");
    })->name("criticalIllnessBenefit");
    Route::get('/group-medical-insurance', function(){
        return view("pages.corporateSinglepage.groupMedical.index");
    })->name("groupMedical");
    Route::get('/group-personal-accident', function(){
        return view("pages.corporateSinglepage.groupPersonal.index");
    })->name("groupPersonal");

    // more page
    Route::get('/media-corner', function(){
        return view("pages.mediaCorner.index");
    })->name("mediaCorner");

    Route::get('/financials', function(){
        return view("pages.financials.index");
    })->name("financials");

    Route::get('/newsletter', function(){
        return view("pages.newsletter.index");
    })->name("newsLetter");

    Route::get('/corona-virus-awareness', function(){
        return view("pages.awareness.index");
    })->name("coronaVirus");

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

    Route::get('/csr-activities', function(){
        return view("pages.csr.index");
    })->name("CSR");

});


//  Backend Route Controll 