<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use App\Services\Job2Service;

class Job2Controller extends Controller
{
    use ApiResponser;
    /**
     * The service to consume the Job2 Microservice
     * @var Job2Service
     */
    public $user2Service;
    /**
     * Create a new controller instance
     * @return void
     */
    public function
    __construct(Job2Service $user2Service)
    {
        $this->user2Service = $user2Service;
    }
    private $request;
    private $rules;

    public function getJobs()
    {
    }

    /**
     * Return the list of users
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        return $this->successResponse($this->user2Service->obtainJobs2());
    }
    public function add(Request $request)
    {
        return $this->successResponse($this->user2Service->createJob2($request->all()), Response::HTTP_CREATED);
    }
    /**
     * Obtains and show one user
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($id)
    {
        return $this->successResponse($this->user2Service->obtainJob2($id));
    }
    /**
     * Update an existing author
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->user2Service->editJob2($request->all(), $id));
    }
    /**
     * Remove an existing user
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        return $this->successResponse($this->user2Service->deleteJob2($id));
    }
}
