<?php

namespace App\Http\Requests\Reviews;

// Enums
use App\Enums\EntityType;

// Laravel
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

    public function rules() {
        return [
            'sender_type' => 'required|in:' . implode(",", EntityType::cases()),
            'sender_id' => 'nullable|numeric',
            'receiver_type' => 'required|in:' . implode(",", EntityType::cases()),
            'receiver_id' => 'nullable|numeric',
            'review' => 'nullable|string|max:1000',
            'updated_at' => 'nullable|datetime',
            'rate' => 'required|numeric|min:1|max:5'
        ];
    }

    public function messages() {
        return [
            // Requireds
            'sender_type.required' => "E' richiesta la tipologia di entità che sta scrivendo la recensione.",
            'receiver_type.required' => "E' richiesta la tipologia di entità per che sta ricevendo la recensione.",
            'rate.required' => "Si prega di specificare una valutazione da 1 a 5 stelle.",
            // TypeOf
            'sender_type.in' => "Si prega di specificare una delle seguenti tipologie di entità: " . implode(",", EntityType::cases()),
            'receiver_type.in' => "Si prega di specificare una delle seguenti tipologie di entità " . implode(",", EntityType::cases()),
            'sender_id.numeric' => "Si prega di specificare un Sender ID numerico valido.",
            'receiver_id.numeric' => "Si prega di specificare un Receiver ID numerico valido.",
            'review.string' => "Si prega di scrivere una recensione testuale valida, di massimo 1.000 caratteri.",
            'rate.numeric' => "Si prega di specificare una valutazione numerica valida, compresa tra 1 e 5."
        ];
    }

}
