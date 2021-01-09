<?php

namespace App\Service;

use App\Interfaces\Repository\StudentClassRepositoryInterface;
use App\Interfaces\Service\StudentClassServiceInterface;
use App\Model\StudentsClasses;
use stdClass;

class StudentClassServiceImpl implements StudentClassServiceInterface
{
    private $repository;

    public function __construct(StudentClassRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new StudentsClasses();
        $model->student_id = $data->studentId;
        $model->class_id = $data->classId;
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
