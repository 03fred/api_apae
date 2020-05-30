<?php

namespace App\Repository;

use App\Model\Medicines;
use App\Interfaces\Repository\MedicineRepositoryInterface;

class MedicineRepositoryImpl implements MedicineRepositoryInterface
{

    private $model;

    public function __construct(Medicines $model)
    {
        $this->model = $model;
    }

    public function save(Medicines $model)
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

    public function inativeMedicine($id)
    {
        return $this->model->where('id', $id)
            ->update(['register' => false]);
    }
}
