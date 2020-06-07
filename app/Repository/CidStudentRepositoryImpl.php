<?php

namespace App\Repository;

use App\Interfaces\Repository\CidStudentRepositoryInterface;
use App\Model\CidsStudents;

class CidStudentRepositoryImpl implements CidStudentRepositoryInterface
{

    public function __construct()
    {
       
    }

    public function save(CidsStudents $model)
    {
        return $model->save();
    }
}
