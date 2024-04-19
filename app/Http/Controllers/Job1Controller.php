<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use App\Services\Job1Service;

class Job1Controller extends Controller
{
    use ApiResponser;
    /**
     * The service to consume the Job1 Microservice
     * @var Job1Service
     */
    public $user1Service;
    /**
     * Create a new controller instance
     * @return void
     */
    public function
    __construct(Job1Service $user1Service)
    {
        $this->user1Service = $user1Service;
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
        return $this->successResponse($this->user1Service->obtainJobs1());
    }
    public function add(Request $request)
    {
        return $this->successResponse($this->user1Service->createJob1($request->all()), Response::HTTP_CREATED);
    }
    /**
     * Obtains and show one user
     * @return \Illuminate\Http\JsonResponse
     */

    public function show($id)
    {
        return $this->successResponse($this->user1Service->obtainJob1($id));
    }
    /**
     * Update an existing author
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        return $this->successResponse($this->user1Service->editJob1($request->all(), $id));
    }
    /**
     * Remove an existing user
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        return $this->successResponse($this->user1Service->deleteJob1($id));
    }
}
