<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Interfaces\Service\StudentServiceInterface;
use stdClass;

class StudentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $service;

    public function __construct(StudentServiceInterface $service)
    {
        $this->service = $service;
    }
    function insert(Request $req)
    {
       $data = new stdClass();
       $data->name = $req->input('name');
       $data->birth = $req->input('birth');
       $data->nameMother = $req->input('nameMother');
       $data->nameFather = $req->input('nameFather');
       $data->address = $req->input('address');
       $data->cellphone = $req->input('cellphone');
       $data->phone = $req->input('phone');
       $data->numberSus = $req->input('numberSus');
       $this->service->save($data);
    }
   
}
