<?php

namespace App\Dependencies;

use Illuminate\Support\ServiceProvider;

class Repository extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Interfaces\Repository\StudentRepositoryInterface',
            'App\Repository\StudentRepositoryImpl');
    }
}
