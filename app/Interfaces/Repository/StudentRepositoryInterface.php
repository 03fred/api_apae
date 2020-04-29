<?php

namespace App\Interfaces\Repository;

use App\Model\Students;

interface StudentRepositoryInterface
{
    public function save(Students $student);
}
