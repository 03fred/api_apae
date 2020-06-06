<?php

namespace App\Repository;

use App\Interfaces\Repository\MedicinesStudentRepositoryInterface;
use App\Model\MedicinesStudents;

class MedicineStudentRepositoryImpl implements MedicinesStudentRepositoryInterface
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
