<?php

namespace App\Interfaces\Repository;

use App\Model\Disciplines;

interface DisciplineRepositoryInterface
{
    public function save(Disciplines $model);

    public function findFilter($field, $value, $page);
}
