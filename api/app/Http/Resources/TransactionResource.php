<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'sender_type' => $this->sender_type,
            'sender_id' => $this->sender_id,
            'receiver_type' => $this->receiver_type,
            'receiver_id' => $this->receiver_id,
            'payment_method' => $this->payment_method,
            'description' => $this->description,
            'amount' => $this->amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'updatd_by' => $this->updated_by,
            'status' => $this->status
        ];
    }

}
