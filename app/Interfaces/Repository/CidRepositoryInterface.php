<?php

namespace App\Interfaces\Repository;

use App\Model\Cids;

interface CidRepositoryInterface
{
    public function save(Cids $model);

    public function findFilter($field, $value, $page);

    public function findAll();
}
