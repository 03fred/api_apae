<?php

namespace App\Interfaces\Repository;

use App\Model\Medicines;

interface MedicineRepositoryInterface
{
    public function save(Medicines $model);

    public function findFilter($field, $value, $page);

    public function findAll();
}
