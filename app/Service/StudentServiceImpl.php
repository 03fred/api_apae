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
        $codUser = $this->repository->save($student);

        $this->saveStudentCid($data->cid, $codUser);
        $this->saveStudentMedicine($data->medicine, $codUser);
    }

    private function saveStudentCid(array $cids, int $codUser)
    {
        foreach ($cids as $cid) {
            $cidStudent = new CidsStudents();
            $cidStudent->cid_id = $cid;
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
}
