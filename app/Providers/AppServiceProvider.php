<?php

namespace App\Providers;

use App\Models\Menu\Menu;
use App\Models\Setting\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer('*', function($view){
            $setting = Setting::latest()->first();
            $view->with('setting', $setting);
        });
        View::composer('frontend.layouts.header', function($view){
            $menus = Menu::orderBy('position', 'asc')->where('status', true)->get();
            $view->with('menus', $menus);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
