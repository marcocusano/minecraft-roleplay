<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;
use App\Models\CompanyRole;
use App\Models\User;

class CompanyEmployeeResource extends JsonResource {

    public function toArray($request) {

        // Main Resource
        $resource = [
            'company_id' => $this->company_id,
            'role_id' => $this->role_id,
            'user_id' => $this->user_id,
            'user' => User::find($this->user_id) ?: [] // User Relation
        ];
        
        // Relations
        if (in_array($request->route()->getName(), ['companies.employees.*'])) {
            // Company Relation
            $resource['company'] = Company::find($this->company_id) ?: [];
            // CompanyRole Relation
            $resource['role'] = CompanyRole::find($this->role_id) ?: [];
        }

        return $resource;
    }

}
