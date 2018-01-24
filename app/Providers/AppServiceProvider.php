<?php

namespace App\Providers;

use App\Post;
use App\Tag;
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
        view()->composer('partials.sidebar', function($view){

            $archives = Post::archives();
            $tags = Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));


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
