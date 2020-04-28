<?php

namespace App\Service;

use App\Interfaces\Service\StudentServiceInterface;
use Model\Students;
use stdClass;

class StudentServiceImpl implements StudentServiceInterface
{

    private $repository;

    // public function __construct(StudentRepositoryInterface $repository)
    // {
    //     $this->repository = $repository;
    // }

    public function save(stdClass $data)
    {
        var_dump($data);
        $student = new Students();
        $student->name = $data->name;
        $student->birth = $data->birth;
        $student->name_mother = $data->nameMother;
        $student->name_father = $data->nameFather;
        $student->cellphone = $data->cellPhone;
        $student->phone = $data->phone;
        $student->number_sus = $data->numberSus;
        $student->status_register = true;
        $this->repository->save($student);
    }
}
