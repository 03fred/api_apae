<?php

namespace App\Interfaces\Repository;

use App\Model\Classes;

interface ClassRepositoryInterface
{
    public function save(Classes $model);

    public function findFilter($field, $value, $page);
}
