<?php

namespace App\Interfaces\Repository;

use App\Model\MedicinesStudents;

interface MedicinesStudentRepositoryInterface
{
    public function save(MedicinesStudents $model);
}
