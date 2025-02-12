<?php

// app/Providers/OrganizationServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\OrganizationService;

class OrganizationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(OrganizationService::class, function ($app) {
            return new OrganizationService();
        });
    }

    public function boot()
    {
        //
    }
}
