<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'curriculum' => $this->curriculum,
            'thirst' => $this->thirst,
            'balance' => $this->balance,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}
