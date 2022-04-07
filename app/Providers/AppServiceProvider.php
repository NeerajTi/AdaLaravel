<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Setting;
use App\Page;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $settings = Setting::where('id',1)->first();
        $pages=Page::where('status','Active')->orderBy('title', 'asc')->paginate(100);
        View::share('site', ['site_name'=>'My Site','sitess'=>$settings,'pages'=>$pages]);
        
    }
}
