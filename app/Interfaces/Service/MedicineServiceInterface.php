<?php

namespace App\Interfaces\Service;

use stdClass;

interface MedicineServiceInterface
{
    public function save(stdClass $dados);

    public function findFilter($field, $value, $page);
}
