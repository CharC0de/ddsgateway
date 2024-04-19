<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class Job2Service
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
            config('services.users2.base_uri');
    }
    public function obtainJobs2()
    {
        return $this->performRequest("GET", "/jobs");
    }
    public function obtainJob2($id)
    {
        return $this->performRequest("GET", "/jobs/{$id}");
    }
    public function createJob2($data)
    {
        return $this->performRequest(
            'POST',
            '/jobs',
            $data
        );
    }
    public function editJob2($data, $id)
    {
        return $this->performRequest(
            'PUT',
            "/jobs/{$id}",
            $data
        );
    }
    public function deleteJob2($id)
    {
        return $this->performRequest("DELETE", "/jobs/{$id}");
    }
}
