<?php

// app/Providers/GradeServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GradeService;

class GradeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GradeService::class, function ($app) {
            return new GradeService();
        });
    }

    public function boot()
    {
        //
    }
}
