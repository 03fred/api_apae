<?php

namespace Repository;

use Interfaces\Repository\StudentRepositoryInterface;
use Model\Student;

class StudentRepositoryImpl implements StudentRepositoryInterface
{

    private $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function save(Student $student)
    {
        return $student->save();
    }
}
