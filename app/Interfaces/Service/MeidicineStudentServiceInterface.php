<?php

namespace App\Interfaces\Service;

use App\Model\MedicinesStudents;

interface MedicineStudentServiceInterface
{
    public function save(MedicinesStudents $medicinesStudents);
}
