<?php

namespace App\Http\Resources;

// Libraries
use Illuminate\Http\Resources\Json\JsonResource;

// Models
use App\Models\Company;

// Resources
use App\Http\Resources\CompanyResource;

class RoleResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'company' => new CompanyResource(new Company($this->company_id)),
            'name' => $this->name,
            'description' => $this->description,
            'default_payment_value' => $this->default_payment_value
        ];
    }

}
