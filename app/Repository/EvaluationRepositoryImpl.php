<?php

namespace App\Repository;

use App\Interfaces\Repository\EvaluationRepositoryInterface;
use App\Model\Evaluations;

class EvaluationRepositoryImpl implements EvaluationRepositoryInterface
{

    private $model;

    public function __construct(Evaluations $model)
    {
        $this->model = $model;
    }

    public function save(Evaluations $model)
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
