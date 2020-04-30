<?php

namespace App\Dependencies;

use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('App\Interfaces\Service\StudentServiceInterface', 'App\Service\StudentServiceImpl');
        $this->app->bind('App\Interfaces\Service\CidServiceInterface', 'App\Service\CidServiceImpl');
        $this->app->bind('App\Interfaces\Service\MedicineServiceInterface', 'App\Service\MedicineServiceImpl');
    }
}
