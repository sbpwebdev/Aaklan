<?php

// app/Providers/StudentTypeServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StudentTypeService;

class StudentTypeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(StudentTypeService::class, function ($app) {
            return new StudentTypeService();
        });
    }

    public function boot()
    {
        //
    }
}
