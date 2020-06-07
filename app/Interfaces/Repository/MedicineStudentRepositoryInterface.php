<?php

namespace App\Interfaces\Repository;

use App\Model\MedicinesStudents;

interface MedicineStudentRepositoryInterface
{
    public function save(MedicinesStudents $model);
}
