<?php

namespace App\Providers;
<<<<<<< HEAD

=======
use App\Models\Blog;
use App\Observers\BlogObserver;
>>>>>>> blog-updation
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======
        Blog::observe(BlogObserver::class);
>>>>>>> blog-updation
    }
}
