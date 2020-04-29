<?php

namespace App\Service;

use App\Interfaces\Service\StudentServiceInterface;
use App\Model\Students;
use App\Interfaces\Repository\StudentRepositoryInterface;
use stdClass;

class StudentServiceImpl implements StudentServiceInterface
{

    private $repository;

    public function __construct(StudentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $student = new Students();
        $student->name = $data->name;
        $student->birth = $data->birth;
        $student->mother_name = $data->nameMother;
        $student->father_name = $data->nameFather;
        $student->cellphone = $data->cellPhone;
        $student->telephone = $data->phone;
        $student->sus_numer = $data->numberSus;
        $student->registered = true;
        $student->address = $data->address;
        $student->record_number = $data->recordNumber;
        $this->repository->save($student);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
