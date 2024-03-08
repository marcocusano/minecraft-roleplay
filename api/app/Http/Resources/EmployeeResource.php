<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;
use App\Models\User;
use App\Models\Role;

// Resources
use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\RoleResource;

class EmployeeResource extends JsonResource {

    public function toArray($request) {
        return [
            'company_id' => $this->company_id,
            'company' => new CompanyResource(new Company($this->company_id)),
            'user_id' => $this->user_id,
            'user' => new UserResource(new User($this->user_id)),
            'role_id' => $this->role_id,
            'role' => new RoleResource(new Role($this->role_id))
        ];
    }

}
