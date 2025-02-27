<?php

// app/Providers/StudentServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StudentService;

class StudentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(StudentService::class, function ($app) {
            return new StudentService();
        });
    }

    public function boot()
    {
        //
    }
}
