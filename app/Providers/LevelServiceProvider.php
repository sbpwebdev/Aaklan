<?php

// app/Providers/LevelServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LevelService;

class LevelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LevelService::class, function ($app) {
            return new LevelService();
        });
    }

    public function boot()
    {
        //
    }
}
