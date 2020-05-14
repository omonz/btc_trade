<?php

namespace App\Providers;

use App\BasicSetting;
use App\Menu;
use App\Page;
use App\PaymentMethod;
use App\Social;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Support\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // URL::forceSchema('https');
        //$this->app['request']->server->set('HTTPS', 'on');
        
        Schema::defaultStringLength(191);
        $basic = BasicSetting::first();
        $social = Social::all();
        $menu = Menu::all();
        $pay = PaymentMethod::all();
        $page = Page::first();
        View::share('site_title',$basic->title);
        View::share('basic',$basic);
        View::share('social',$social);
        View::share('menu',$menu);
        View::share('pay',$pay);
        View::share('page',$page);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
