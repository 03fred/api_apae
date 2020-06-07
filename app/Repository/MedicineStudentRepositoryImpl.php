<?php

namespace App\Repository;

use App\Interfaces\Repository\MedicineStudentRepositoryInterface;
use App\Model\MedicinesStudents;

class MedicineStudentRepositoryImpl implements MedicineStudentRepositoryInterface
{


    public function __construct(MedicinesStudents $model)
    {
        $this->model = $model;
    }

    public function save(MedicinesStudents $model)
    {
        return $model->save();
    }
}
