<?php

namespace App\Interfaces\Repository;

use Model\CidsStudents;

interface CidsStudentRepositoryInterface
{
    public function save(CidsStudents $model);
}
