<?php

namespace App\Repository;

use App\Interfaces\Repository\ClassRepositoryInterface;
use App\Model\Classes;

class ClassRepositoryImpl implements ClassRepositoryInterface
{
    private $model;

    public function __construct(Classes $model)
    {
        $this->model = $model;
    }

    public function save(Classes $model)
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

    public function inativeCid($id)
    {
        return $this->model->where('id', $id)
            ->update(['register' => false]);
    }
}
