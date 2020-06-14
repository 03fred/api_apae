<?php

namespace App\Service;

use App\Interfaces\Service\StudentServiceInterface;
use App\Model\Students;
use App\Interfaces\Repository\StudentRepositoryInterface;
use App\Interfaces\Service\CidStundentServiceInterface;
use App\Model\CidsStudents;
use stdClass;

class StudentServiceImpl implements StudentServiceInterface
{

    private $repository;
    private $cidStudentService;

    public function __construct(
        StudentRepositoryInterface $repository,
        CidStundentServiceInterface $cidStudentService
    ) {
        $this->repository = $repository;
        $this->cidStudentService = $cidStudentService;
    }

    public function save(stdClass $data)
    {
        $student = new Students();
        $student->name = $data->student['name'];
        $student->birth = $data->student['birth'];
        $student->mother_name =$data->student['nameMother'];
        $student->father_name = $data->student['nameFather'];
        $student->cellphone = $data->student['cellPhone'];
        $student->telephone = $data->student['phone'];
        $student->sus_numer = $data->student['numberSus'];
        $student->registered = true;
        $student->address =$data->student['address'];
        $student->record_number = $data->student['recordNumber'];
        $codUser = $this->repository->save($student);
        $this->saveStudentCid($data->cid, $codUser);
    }

    private function saveStudentCid(array $cids, int $codUser)
    {
        foreach ($cids as $cid) {
            $cidStudent = new CidsStudents();
            $cidStudent->cid_id = $cid['id'];
            $cidStudent->student_id = $codUser;
            $this->cidStudentService->save($cidStudent);
        }
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page * MAX_PER_PAGE);
    }
}
