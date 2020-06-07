<?php

namespace App\Service;

use App\Interfaces\Service\UserServiceInterface;
use App\Model\Users;
use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Service\CidServiceInterface;
use App\Interfaces\Service\MedicineServiceInterface;
use Model\CidsStudents;
use stdClass;

class UserServiceImpl implements UserServiceInterface
{

    private $repository;

    public function __construct(
        UserRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $user = new Users();
        $user->name = $data->name;
        $user->email = $data->email;
        $user->birth = $data->birth;
        $user->telephone = $data->telephone;
        $user->cellphone = $data->cellphone;
        $codUser = $this->repository->save($user);

        $cidStudent = new CidsStudents();
        $cidStudent->student_id = $codUser;
        $cidStudent->cid_id = $data->cid;
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
