<?php

namespace App\Http\Resources;

// Laravel
use Illuminate\Http\Resources\Json\JsonResource;

// Enums
use App\Enums\EntityType;

// Models
use App\Models\Company;
use App\Models\User;

// Resources

class ReviewResource extends JsonResource {

    public function toArray($request) {

        // Main resource
        $resource = [
            "id" => $this->id,
            "sender_type" => $this->sender_type,
            "sender_id" => $this->sender_id,
            "receiver_type" => $this->receiver_type,
            "receciver_id" => $this->receiver_id,
            "review" => $this->review,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "rate" => $this->rate
        ];

        // Relations
        if ($this->sender_type === EntityType::CITIZEN && is_numeric($this->sender_id)) { $resource['sender'] = User::find($this->sender_id); } else if ($this->sender_type === EntityType::COMPANY && is_numeric($this->sender_id)) { $resource['sender'] = Company::find($this->sender_id); } else { $resource['sender'] = []; }
        if ($this->receiver_type === EntityType::CITIZEN && is_numeric($this->receiver_id)) { $resource['receiver'] = User::find($this->receiver_id); } else if ($this->receiver_type === EntityType::COMPANY && is_numeric($this->receiver_id)) { $resource['receiver'] = Company::find($this->receiver_id); } else { $resource['receiver'] = []; }

        return $resource;

    }
    
}
