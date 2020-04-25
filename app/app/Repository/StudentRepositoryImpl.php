<?php

namespace app\Repository;

use App\app\Model\Student;
use app\Interfaces\Repository\StudentRepositoryInterface;

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
