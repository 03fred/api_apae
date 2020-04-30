<?php

namespace App\Interfaces\Repository;

use App\Model\Users;

interface UserRepositoryInterface
{
    public function save(Users $model);

    public function findFilter($field, $value, $page);
}
