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
        $this->app->bind('App\Interfaces\Service\UserServiceInterface', 'App\Service\UserServiceImpl');
        $this->app->bind('App\Interfaces\Service\MedicineStudentServiceInterface', 'App\Service\MedicineStudentServiceImpl');
        $this->app->bind('App\Interfaces\Service\CidStudentServiceInterface', 'App\Service\CidStudentServiceImpl');
    }
}
