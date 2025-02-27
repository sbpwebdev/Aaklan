<?php

// app/Providers/StaffServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StaffService;

class StaffServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(StaffService::class, function ($app) {
            return new StaffService();
        });
    }

    public function boot()
    {
        //
    }
}
