<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['layouts.frontend.partials.header'], function ($view) {
            $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
            $view->with('categories', $categories);
        });
    }
}
