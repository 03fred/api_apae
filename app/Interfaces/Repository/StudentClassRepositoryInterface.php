<?php

namespace App\Interfaces\Repository;

use App\Model\StudentsClasses;

interface StudentClassRepositoryInterface
{
    public function save(StudentsClasses $student);

    public function findFilter($field, $value, $page);
}
