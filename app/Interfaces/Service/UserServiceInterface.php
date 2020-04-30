<?php

namespace App\Interfaces\Service;

use stdClass;

interface UserServiceInterface
{
    public function save(stdClass $dados);

    public function findFilter($field, $value, $page);
}
