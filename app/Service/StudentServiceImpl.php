<?php

namespace App\Service;

use App\Interfaces\Service\StudentServiceInterface;
use App\Model\Students;
use App\Interfaces\Repository\StudentRepositoryInterface;
use App\Interfaces\Service\CidStundentServiceInterface;
use App\Interfaces\Service\MedicineStudentServiceInterface;
use App\Model\MedicinesStudents;
use App\Model\CidsStudents;
use stdClass;

class StudentServiceImpl implements StudentServiceInterface
{

    private $repository;
    private $medicineStudentService;
    private $cidStudentService;

    public function __construct(
        StudentRepositoryInterface $repository,
        MedicineStudentServiceInterface $medicineStudentService,
        CidStundentServiceInterface $cidStudentService
    ) {
        $this->repository = $repository;
        $this->medicineStudentService = $medicineStudentService;
        $this->cidStudentService = $cidStudentService;
    }

    public function save(stdClass $data)
    {
        $student = new Students();
        $student->name = $data->student['name'];
        $student->birth = $data->student['birth'];
        $student->mother_name = $data->student['nameMother'];
        $student->father_name = $data->student['nameFather'];
        $student->cellphone = $data->student['cellPhone'];
        $student->telephone = $data->student['phone'];
        $student->sus_number = $data->student['numberSus'];
        $student->registered = true;
        $student->address = $data->student['address'];
        $codUser = $this->repository->save($student);

        if (isset($data->cid) && count($data->cid) > 0)
            $this->saveStudentCid($data->cid, $codUser);

        if (isset($data->medicine) && count($data->medicine) > 0)
            $this->saveStudentMedicine($data->medicine, $codUser);
    }

    public function update(stdClass $dados)
    {
        $this->repository->update($dados);
    }

    private function saveStudentCid(array $cids, int $codUser)
    {
        foreach ($cids as $cid) {
            $cidStudent = new CidsStudents();
            $cidStudent->cid_id = $cid["id"];
            $cidStudent->student_id = $codUser;
            $this->cidStudentService->save($cidStudent);
        }
    }

    private function saveStudentMedicine(array $medicines, int $codUser)
    {
        foreach ($medicines as $medicine) {
            $medicineStudent = new MedicinesStudents();
            $medicineStudent->medicine_id = $medicine['id'];
            $medicineStudent->student_id = $codUser;
            $medicineStudent->dosage = $medicine['dosage'];
            $medicineStudent->medication_hour = $medicine['hour'];
            $this->medicineStudentService->save($medicineStudent);
        }
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }

    public function delete(int $student_id)
    {
        return $this->repository->delete($student_id);
    }
}
