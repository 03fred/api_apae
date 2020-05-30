<?php

namespace App\Repository;

use App\Model\Users;
use App\Interfaces\Repository\UserRepositoryInterface;

class UserRepositoryImpl implements UserRepositoryInterface
{

    private $model;

    public function __construct(Users $model)
    {
        $this->model = $model;
    }

    public function save(Users $model)
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
