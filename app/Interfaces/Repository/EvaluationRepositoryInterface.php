<?php

namespace App\Interfaces\Repository;

use App\Model\Evaluations;

interface EvaluationRepositoryInterface
{
    public function save(Evaluations $model);
}
