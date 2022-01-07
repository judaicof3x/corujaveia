<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Image;
use App\Observers\EventObserver;
use App\Observers\ImageObserver;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(125);

        Event::observe(EventObserver::class);
        Image::observe(ImageObserver::class);
    }
}
