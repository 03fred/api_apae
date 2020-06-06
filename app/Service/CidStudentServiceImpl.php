<?php

namespace App\Service;

use App\Interfaces\Repository\CidsStudentRepositoryInterface;
use App\Interfaces\Service\CidStundentServiceInterface;
use Model\CidsStudents;

class CidStudentServiceImpl implements CidStundentServiceInterface
{

    private $repository;

    public function __construct(CidsStudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(CidsStudents $model)
    {
        $this->repository->save($model);
    }
}
