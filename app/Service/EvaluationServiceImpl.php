<?php

namespace App\Service;

use App\Interfaces\Repository\EvaluationRepositoryInterface;
use App\Interfaces\Service\EvaluationServiceInterface;
use App\Model\Evaluations;
use DateTime;
use stdClass;

class EvaluationServiceImpl implements EvaluationServiceInterface
{
    private $repository;

    public function __construct(EvaluationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function save(stdClass $data)
    {
        $model = new Evaluations();
        $model->student_id = $data->student;
        $model->user_id = $data->user;
        $model->register = new DateTime();
        $model->note_evaluation = $data->noteEvaluation;
        $model->note = $data->note;
        $this->repository->save($model);
    }
}
