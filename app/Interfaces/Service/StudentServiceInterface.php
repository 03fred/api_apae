<?php

namespace App\Interfaces\Service;

use stdClass;

interface StudentServiceInterface
{
    public function save(stdClass $dados);
}
