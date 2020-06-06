<?php

namespace App\Service;

use App\Interfaces\Repository\CidStudentRepositoryInterface;
use App\Interfaces\Service\CidStundentServiceInterface;
use Model\CidsStudents;

class CidStudentServiceImpl implements CidStundentServiceInterface
{

    private $repository;

    public function __construct(CidStudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(CidsStudents $model)
    {
        $this->repository->save($model);
    }
}
