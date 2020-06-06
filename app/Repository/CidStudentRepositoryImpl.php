<?php

namespace App\Repository;

use App\Interfaces\Repository\CidsStudentRepositoryInterface;
use Model\CidsStudents;

class CidStudentRepositoryImpl implements CidsStudentRepositoryInterface
{

    public function __construct(CidsStudents $model)
    {
        $this->model = $model;
    }

    public function save(CidsStudents $model)
    {
        return $model->save();
    }
}
