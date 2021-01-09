<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentClassRepositoryInterface;
use App\Model\StudentsClasses;

class StudentClassRepositoryImpl implements StudentClassRepositoryInterface
{

    private $model;

    public function __construct(StudentsClasses $model)
    {
        $this->model = $model;
    }

    public function save(StudentsClasses $model)
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

    public function inativeStudent($id)
    {
        return $this->model->where('id', $id)
            ->update(['register' => false]);
    }
}
