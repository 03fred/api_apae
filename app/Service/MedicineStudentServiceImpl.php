<?php

namespace App\Service;

use App\Interfaces\Repository\MedicinesStudentRepositoryInterface;
use App\Interfaces\Service\MedicineStudentServiceInterface;
use App\Model\MedicinesStudents;

class MedicineStudentServiceImpl implements MedicineStudentServiceInterface
{

    private $repository;

    public function __construct(MedicinesStudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(MedicinesStudents $medicinesStudents)
    {
        $this->repository->save($medicinesStudents);
    }
}
