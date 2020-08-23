<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\Service\CidServiceInterface;
use Illuminate\Http\Request;

class CidController extends Controller
{
    private $service;

    public function __construct(CidServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findFilter(Request $request)
    {
        $field = empty($request->query('field')) ? 'sickness_name' : $request->query('field');
        $value = empty($request->query('value')) ? '' : $request->query('value');
        $page = empty($request->query('page')) ? 3 : $request->query('page');

        $data = $this->service->findFilter($field, $value, $page);

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function insert(Request $request)
    {
        $data = (object) $request->all();
        $this->service->save($data);

        return response()->json(['success'], 201);
    }



    function findAll()
    {
        $data = $this->service->findAll();
        return response()->json(array('data' => $data));
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
}
