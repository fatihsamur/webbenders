<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Blogs;
use App\Categories;

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
        View::composer('*', function ($view){
        //   $blogs = Blogs::all();
          $categories = Categories::all();
        //   $view->with('blogs',$blogs);  
          $view->with('categories',$categories) ; 

        });
    }
}
