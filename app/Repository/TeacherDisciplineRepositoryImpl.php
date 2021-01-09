<?php

namespace App\Repository;

use App\Interfaces\Repository\TeacherDisciplineRepositoryInterface;
use App\Model\TeachersDisciplines;

class TeacherDisciplineRepositoryImpl implements TeacherDisciplineRepositoryInterface
{

    private $model;

    public function __construct(TeachersDisciplines $model)
    {
        $this->model = $model;
    }

    public function save(TeachersDisciplines $model)
    {
        return $model->save();
    }

    public function findFilter($field, $value, $page)
    {
        return $this->model::where($field, 'LIKE', $value . '%')->paginate($page);
    }

    public function findById($id)
    {
        return $this->model->where('id', '=', $id)->first();
    }

    public function inativeUser($id)
    {
        return $this->model->where('id', $id)
            ->update(['register' => false]);
    }
}
