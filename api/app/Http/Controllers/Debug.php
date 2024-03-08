<?php

namespace App\Http\Controllers;

use App\Enums\EntityType;
use App\Http\Controllers\Enums;

use Illuminate\Routing\Controller;

class Debug extends Controller {

    public function get() {
        $postRules = [
            'type' => 'required|in:' . implode(",", \App\Enums\TransactionTypes),
            'sender_type' => 'required|in:' . implode(",", \App\Enums\EntityTypes),
            'sender_id' => 'numeric|nullable',
            'receiver_type' => 'required|in:' . implode(",", \App\Enums\EntityTypes),
            'receiver_id' => 'numeric|nullable',
            'payment_method' => 'in:' . implode(",", \App\Enums\PaymentMethodTypes) . '|nullable',
            'description' => 'string|max:500|nullable',
            'created_at' => 'required|date',
            'updated_at' => 'date',
            'updated_by' => 'numeric|exists:users,id|nullable',
            'amount' => 'numeric|max:999999999',
            'status' => 'required|numeric|min:-2|max:1' // -2 = Refunded | -1 = Canceled | 0 = Pending | 1 = Confirmed
        ];
        var_dump($postRules); die();
    }

}