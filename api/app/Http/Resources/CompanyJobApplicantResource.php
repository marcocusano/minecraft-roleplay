<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\CompanyJob;
use App\Models\User;

// Resources
use App\Http\Resources\UserResource;
use App\Http\Resources\CompanyJobResource;

class CompanyJobApplicantResource extends JsonResource {

    public function toArray($request) {

        // Main Resource
        $resource = [
            'user_id' => $this->user_id,
            'job_id' => $this->job_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status' => $this->status
        ];

        // Relations
        if ($request->routeIs(['companies.jobs.*'])) {
            $resource['user'] = new UserResource(User::find($this->user_id));
            $resource['job'] = new CompanyJobResource(CompanyJob::find($this->job_id));
        }

        return $resource;
    }

}
