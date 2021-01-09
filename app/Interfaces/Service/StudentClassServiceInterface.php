<?php

namespace App\Interfaces\Service;

use stdClass;

interface StudentClassServiceInterface
{
    public function save(stdClass $dados);

    public function findFilter($field, $value, $page);
}
