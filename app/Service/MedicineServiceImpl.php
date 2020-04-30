<?php

namespace App\Service;

use App\Interfaces\Service\MedicineServiceInterface;
use App\Model\Medicines;
use App\Interfaces\Repository\MedicineRepositoryInterface;
use stdClass;

class MedicineServiceImpl implements MedicineServiceInterface
{

    private $repository;

    public function __construct(MedicineRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new Medicines();
        $model->name_medicine = $data->nameMedicine;
        $this->repository->save($model);
    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
