<?php

namespace Interfaces\Repository;

use Model\Student;

interface StudentRepositoryInterface
{
    public function save(Student $student);
}
