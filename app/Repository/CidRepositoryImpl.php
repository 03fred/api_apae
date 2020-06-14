<?php

namespace App\Repository;

use App\Model\Cids;
use App\Interfaces\Repository\CidRepositoryInterface;

class CidRepositoryImpl implements CidRepositoryInterface
{
    private $model;

    public function __construct(Cids $model)
    {
        $this->model = $model;
    }

    public function save(Cids $model)
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

    public function findAll()
    {
        return $this->model->all();
    }
}
