<?php

namespace App\Http\Resources;

// Laravel
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;

// Resources
use App\Http\Resources\CompanyEmployeeResource;

class CompanyResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'owner_id' => $this->owner_id,
            'luckperms' => json_decode($this->luckperms),
            'name' => $this->name,
            'description' => $this->description,
            'location' => json_decode($this->loaction),
            'icon' => $this->icon,
            'is_public' => $this->is_public ? true : false,
            'is_police' => $this->is_police ? true : false,
            'is_master' => $this->is_master ? true : false,
            'balance' => $this->balance,
            'employees' => CompanyEmployeeResource::collection(Company::find($this->id)->employees),
            'roles' => CompanyRoleResource::collection(Company::find($this->id)->roles)
        ];
    }
    
}
