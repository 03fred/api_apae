<?php

namespace App\Repository;

use App\Model\Students;
use App\Interfaces\Repository\StudentRepositoryInterface;

class StudentRepositoryImpl implements StudentRepositoryInterface
{

    private $student;

    public function __construct(Students $student)
    {
        $this->student = $student;
    }

    public function save(Students $student)
    {
        return $student->save();
    }
}
