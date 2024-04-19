<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class Job1Service
{
    use ConsumesExternalService;
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
    public $baseUri;
    public function __construct()
    {
        $this->baseUri =
            config('services.users1.base_uri');
    }
    public function obtainJobs1()
    {
        return $this->performRequest("GET", "/jobs");
    }
    public function obtainJob1($id)
    {
        return $this->performRequest("GET", "/jobs/{$id}");
    }
    public function createJob1($data)
    {
        return $this->performRequest(
            'POST',
            '/jobs',
            $data
        );
    }
    public function editJob1($data, $id)
    {
        return $this->performRequest(
            'PUT',
            "/jobs/{$id}",
            $data
        );
    }
    public function deleteJob1($id)
    {
        return $this->performRequest("DELETE", "/jobs/{$id}");
    }
}
