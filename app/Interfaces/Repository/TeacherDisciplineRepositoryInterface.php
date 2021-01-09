<?php

namespace App\Interfaces\Repository;

use App\Model\TeachersDisciplines;

interface TeacherDisciplineRepositoryInterface
{
    public function save(TeachersDisciplines $model);

    public function findFilter($field, $value, $page);
}
