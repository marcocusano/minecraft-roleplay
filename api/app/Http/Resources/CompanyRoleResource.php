<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;

class CompanyRoleResource extends JsonResource {

    public function toArray($request) {

        // Main Resource
        $resource = [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'name' => $this->name,
            'description' => $this->description,
            'salary' => $this->salary
        ];

        // Company Relation
        if (in_array($request->route()->getName(), ['companies.roles.*'])) { $resource['company'] = Company::find($this->company_id); }

        return $resource;
    }

}
