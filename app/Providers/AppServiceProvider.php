<?php

namespace Quality\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('main.menu', function($view) {
            $path = explode('/', request()->path());
            unset($path[0]);
            
            $newUri = implode('/', $path);
            
            $view->with('currentUrl', $newUri);
    
            Schema::defaultStringLength(191);
        });
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
