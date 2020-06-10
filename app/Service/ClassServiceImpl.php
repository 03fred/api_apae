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
        $model->classroom = $data->classRoom;
        $model->name = $data->name;
        $model->start = $data->start;
        $model->end = $data->end;
        $model->period = $data->period;
        $this->repository->save($model);
    }
}
