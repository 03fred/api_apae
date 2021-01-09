<?php

namespace App\Service;

use App\Interfaces\Repository\FrequencyRepositoryInterface;
use App\Interfaces\Service\FrequencyServiceInterface;
use App\Model\Frequencies;
use stdClass;

class FrequencyServiceImpl implements FrequencyServiceInterface
{

    private $repository;

    public function __construct(FrequencyRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
      $model = new Frequencies();
      $model->student_id = $data->studentId;
      $model->discipline_id = $data->disciplineId;
      $model->class_id = $data->classId;
      $model->date_frequency = $data->dateFrequency;
      $model->frequency = $data->frequency;
      $this->repository->save($model);

    }

    public function findFilter($field, $value, $page)
    {
        return $this->repository->findFilter($field, $value, $page);
    }
}
