<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;

class CompanyJobResource extends JsonResource {

    public function toArray($request) {

        // Main Resource
        $resource = [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'expires_at' => $this->expires_at
        ];

        // Relations
        if (in_array($request->route()->getName(), ['companies.jobs.*'])) {
            $resource['company'] = Company::find($this->company_id) ?: [];
            $resource['role'] = CompanyRole::find($this->role_id) ?: [];
        }

        return $resource;
    }

}
