<?php

namespace App\Interfaces\Repository;

use App\Model\Frequencies;

interface FrequencyRepositoryInterface
{
    public function save(Frequencies $model);

    public function findFilter($field, $value, $page);
}
