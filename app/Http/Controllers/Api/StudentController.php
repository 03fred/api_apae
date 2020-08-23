<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Interfaces\Service\StudentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    private $service;

    public function __construct(StudentServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findFilter(Request $req)
    {
        $field = $req->query('field');
        $value =  $req->query('value');
        $page = $req->query('page');

        $data = $this->service->findFilter($field, $value, $page);

        return response()->json($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {

        $fieldValidations = $this->returnValidation();
    
        $data = (object) $request->all();

        $validator = Validator::make($data->student, $fieldValidations, Helpers::returnMessageFieldValidation());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }        

        $this->service->save($data);

        return response()->json(['success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function returnValidation(): array
    {
        return  [
            'name' => 'required|max:255',
            'birth' => 'required|max:10',
            'nameMother' => 'required|max:255',
            'nameFather' => 'required|max:255',
            'address' => 'required|max:255',
            'cellPhone' => 'required|max:15',
            'numberSus' => 'required|max:255',
        ];
    }
}
