<?php

namespace App\Service;

use App\Interfaces\Repository\ClassRepositoryInterface;
use App\Interfaces\Service\ClassServiceInterface;
use App\Model\Classes;
use stdClass;

class ClassServiceImpl implements ClassServiceInterface
{

    private $repository;

    public function __construct(ClassRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new Classes();
        $model->classroom = $data->classroom;
        $model->name = $data->name;
        $model->start =  array_reverse(explode('/', $data->start))[0];
        $model->end = array_reverse(explode('/', $data->end))[0];
        $model->period = $data->period['id'];
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
