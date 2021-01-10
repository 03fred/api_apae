<?php

namespace App\Interfaces\Service;

use stdClass;

interface StudentServiceInterface
{
    public function save(stdClass $dados);
    public function update(stdClass $dados);
    public function findFilter($field, $value, $page);
}
