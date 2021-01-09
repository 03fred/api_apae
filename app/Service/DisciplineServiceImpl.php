<?php

namespace App\Service;

use App\Interfaces\Repository\DisciplineRepositoryInterface;
use App\Interfaces\Service\DisciplineServiceInterface;
use App\Model\Disciplines;
use stdClass;

class DisciplineServiceImpl implements DisciplineServiceInterface
{

    private $repository;

    public function __construct(DisciplineRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new Disciplines();
        $model->name = $data->name;
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
