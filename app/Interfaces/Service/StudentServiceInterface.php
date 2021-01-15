<?php

namespace App\Interfaces\Service;

use stdClass;

interface StudentServiceInterface
{
    public function save(stdClass $dados);
    public function update(stdClass $dados);
    public function delete(int $student_id);
    public function findFilter($field, $value, $page);
}
