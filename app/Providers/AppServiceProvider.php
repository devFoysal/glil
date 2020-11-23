<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\RetailPlan;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('*', function ($view) {
            $menus = Menu::with('submenus')->where(['status' => 1]) ->orderBy('orders', 'asc')->get();
            $retailPlans = RetailPlan::all();
            $view->with('menus', $menus);
            $view->with('Bn', app()->getLocale() == 'bn' ? true : false);
            $view->with('ourplans',$retailPlans);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}