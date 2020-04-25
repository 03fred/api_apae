<?php

namespace app\Interfaces\Repository;

use App\app\Model\Student;

interface StudentRepositoryInterface
{
    public function save(Student $student);
}
