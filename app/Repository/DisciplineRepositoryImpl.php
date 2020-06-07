<?php

namespace App\Repository;

use App\Interfaces\Repository\DisciplineRepositoryInterface;
use App\Model\Disciplines;

class DisciplineRepositoryImpl implements DisciplineRepositoryInterface
{

    private $model;

    public function __construct(Disciplines $model)
    {
        $this->model = $model;
    }

    public function save(Disciplines $model)
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
}
