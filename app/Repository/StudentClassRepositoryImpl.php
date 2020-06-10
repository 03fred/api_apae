<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentClassRepositoryInterface;
use App\Model\StudentsClasses;

class StudentClassRepository implements StudentClassRepositoryInterface
{

    private $model;

    public function __construct(StudentsClasses $model)
    {
        $this->model = $model;
    }

    public function save(array $models)
    {
        return $this->model::insert($models);
    }

}
