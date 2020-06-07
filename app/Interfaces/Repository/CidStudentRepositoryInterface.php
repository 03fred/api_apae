<?php

namespace App\Interfaces\Repository;

use App\Model\CidsStudents;

interface CidStudentRepositoryInterface
{
    public function save(CidsStudents $model);
}
