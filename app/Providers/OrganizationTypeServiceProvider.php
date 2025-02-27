<?php

// app/Providers/OrganizationTypeServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\OrganizationTypeService;

class OrganizationTypeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(OrganizationTypeService::class, function ($app) {
            return new OrganizationTypeService();
        });
    }

    public function boot()
    {
        //
    }
}
