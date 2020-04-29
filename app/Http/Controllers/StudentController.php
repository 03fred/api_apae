<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Interfaces\Service\StudentServiceInterface;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $service;

    public function __construct(StudentServiceInterface $service)
    {
        $this->service = $service;
    }
    function insert(Request $req, Response  $res)
    {
        $data = (object) $req->all();
        $this->service->save($data);

        return $res->setStatusCode(201);
    }

    public function findFilter(Request $req, Response  $res)
    {
        $field = $req->query('field');
        $value =  $req->query('value');
        $page = $req->query('page');

        $data = $this->service->findFilter($field, $value, $page);

         return response(array('data' => json_encode($data)), 200);
    }
}
