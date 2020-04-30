<?php

namespace App\Interfaces\Service;

use stdClass;

interface CidServiceInterface
{
    public function save(stdClass $dados);

    public function findFilter($field, $value, $page);
}
