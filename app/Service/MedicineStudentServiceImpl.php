<?php

namespace App\Service;

use App\Interfaces\Repository\MedicineStudentRepositoryInterface;
use App\Interfaces\Service\MedicineStudentServiceInterface;
use App\Model\MedicinesStudents;

class MedicineStudentServiceImpl implements MedicineStudentServiceInterface
{

    private $repository;

    public function __construct(MedicineStudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(MedicinesStudents $medicinesStudents)
    {
        $this->repository->save($medicinesStudents);
    }
}
