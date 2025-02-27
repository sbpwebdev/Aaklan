<?php

// app/Providers/StaffTypeServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StaffTypeService;

class StaffTypeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(StaffTypeService::class, function ($app) {
            return new StaffTypeService();
        });
    }

    public function boot()
    {
        //
    }
}
