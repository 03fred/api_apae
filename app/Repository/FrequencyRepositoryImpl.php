<?php

namespace App\Repository;

use App\Interfaces\Repository\FrequencyRepositoryInterface;
use App\Model\Frequencies;

class FrequencyRepositoryImpl implements FrequencyRepositoryInterface
{

    private $model;

    public function __construct(Frequencies $model)
    {
        $this->model = $model;
    }

    public function save(Frequencies $model)
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
