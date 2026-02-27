<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Location;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (Schema::hasTable('locations')) {
            View::share('locations', Location::orderBy('id', 'desc')->get());
        }
    }

    
}
