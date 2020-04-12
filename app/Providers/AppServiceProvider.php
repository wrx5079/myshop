<?php

namespace App\Providers;

use App\Brand;
use Illuminate\Support\ServiceProvider;
use function foo\func;

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
        view()->composer('pages._sidebar', function($view){
            $view->with('tvsets', Brand::where('category_id', 1)->get());
            $view->with('notebooks', Brand::where('category_id', 2)->get());
            $view->with('notepads', Brand::where('category_id', 3)->get());
        });
    }
}
