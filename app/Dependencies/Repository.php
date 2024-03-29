<?php

namespace App\Dependencies;

use Illuminate\Support\ServiceProvider;

class Repository extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('App\Interfaces\Repository\StudentRepositoryInterface', 'App\Repository\StudentRepositoryImpl');
        $this->app->bind('App\Interfaces\Repository\CidRepositoryInterface', 'App\Repository\CidRepositoryImpl');
        $this->app->bind('App\Interfaces\Repository\MedicineRepositoryInterface', 'App\Repository\MedicineRepositoryImpl');
        $this->app->bind('App\Interfaces\Repository\UserRepositoryInterface', 'App\Repository\UserRepositoryImpl');
        $this->app->bind('App\Interfaces\Repository\CidStudentRepositoryInterface', 'App\Repository\CidStudentRepositoryImpl');
        $this->app->bind('App\Interfaces\Repository\MedicineStudentRepositoryInterface', 'App\Repository\MedicineStudentRepositoryImpl');
    }
}
