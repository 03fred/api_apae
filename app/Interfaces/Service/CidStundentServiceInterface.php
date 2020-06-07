<?php

namespace App\Interfaces\Service;

use App\Model\CidsStudents;

interface CidStundentServiceInterface
{
    public function save(CidsStudents $cidsStudents);
}
