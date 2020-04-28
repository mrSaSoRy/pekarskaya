<?php

namespace App\Providers;
use App\Models\Category;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['pages.fields'], function ($view) {
            $categoryItems = Category::pluck('title','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        //
    }
}