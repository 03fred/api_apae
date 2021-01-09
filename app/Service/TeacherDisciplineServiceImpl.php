<?php

namespace App\Service;

use App\Interfaces\Repository\TeacherDisciplineRepositoryInterface;
use App\Interfaces\Service\TeacherDisciplineServiceInterface;
use App\Model\TeachersDisciplines;
use stdClass;

class TeacherDisciplineServiceImpl implements TeacherDisciplineServiceInterface
{

    private $repository;

    public function __construct(TeacherDisciplineRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new TeachersDisciplines();
        $model->user_id = $data->userId;
        $model->discipline_id = $data->disciplineId;
        $model->start = $data->start;
        $model->end = $data->end;
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
