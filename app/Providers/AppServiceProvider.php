<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Faker\Factory;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        $categories = Category::all();
        $postNames = Post::pluck('title')->toArray();

        view::share('navigations', $categories);
        view::share('postNames', $postNames);
    }
}
