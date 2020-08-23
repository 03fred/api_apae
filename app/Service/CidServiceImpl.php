<?php

namespace App\Service;

use App\Interfaces\Service\CidServiceInterface;
use App\Model\Cids;
use App\Interfaces\Repository\CidRepositoryInterface;
use stdClass;

class CidServiceImpl implements CidServiceInterface
{

    private $repository;

    public function __construct(CidRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new Cids();
        $model->number = $data->number;
        $model->sickness_name = $data->sicknessName;
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page * 10);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }
}
