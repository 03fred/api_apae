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
        $this->app->bind('App\Interfaces\Service\CidStundentServiceInterface', 'App\Service\CidStudentServiceImpl');
        $this->app->bind('App\Interfaces\Service\DisciplineServiceInterface', 'App\Service\DisciplineServiceImpl');
        $this->app->bind('App\Interfaces\Service\EvaluationServiceInterface', 'App\Service\EvaluationServiceImpl');
        $this->app->bind('App\Interfaces\Service\StudentClassServiceInterface', 'App\Service\StudentClassServiceImpl');
        $this->app->bind('App\Interfaces\Service\ClassServiceInterface', 'App\Service\ClassServiceImpl');

    }
}
