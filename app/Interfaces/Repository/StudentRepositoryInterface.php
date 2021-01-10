<?php

namespace App\Interfaces\Repository;

use App\Model\Students;
use stdClass;

interface StudentRepositoryInterface
{
    public function save(Students $student);
    public function update(stdClass $dados);
    public function findFilter($field, $value, $page);
}
