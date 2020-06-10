<?php

namespace App\Service;

use App\Interfaces\Repository\StudentClassRepositoryInterface;
use App\Interfaces\Service\StudentClassServiceInterface;
use App\Model\StudentsClasses;


class StudentClassServiceImpl implements StudentClassServiceInterface
{

    private $repository;


    public function __construct(StudentClassRepositoryInterface $repository)
    {

        $this->repository = $repository;
    }

    public function save(array $dados)
    {
        $arrayObjects = [];
        foreach ($dados as $data) {
            $model = new StudentsClasses();
            $model->student_id = $data->studentId;
            $model->turma_id = $data->turmaId;
            array_push($arrayObjects,$model);
        }

        $this->repository->save($arrayObjects);
    }
}
