<?php

namespace App\Repository;

use App\Model\Students;
use App\Interfaces\Repository\StudentRepositoryInterface;
use stdClass;

class StudentRepositoryImpl implements StudentRepositoryInterface
{

    private $model;

    public function __construct(Students $model)
    {
        $this->model = $model;
    }

    public function save(Students $model)
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

    public function update(stdClass $dados)
    {
        return $this->model->where('id', $dados->id)
            ->update([
                'address' => $dados->address,
                'cellphone' => $dados->cellphone,
                'telephone' => $dados->telephone,
                'sus_number' => $dados->sus_number,
            ]);
    }

    public function delete(int $student_id)
    {
        return $this->model->where('id', $student_id)
            ->delete();
    }
}
