<?php

namespace App\Http\Requests\Companies\Employees;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\EntityType;

class DeleteRequest extends FormRequest {

    public function rules() {
        return [
            'sender_type' => 'nullable|in:' . implode(",", EntityType::cases()),
            'sender_id' => 'nullable|numeric',
            'rate' => 'nullable|numeric|min:1|max:5',
            'review' => 'nullable|string|max:100'
        ];
    }

    public function messages() {
        return [
            // Min Max
            "rate.min" => "Puoi valutare un Dipendente con un voto minimo di 1 e un massimo di 5.",
            "rate.max" => "Puoi valutare un Dipendente con un voto minimo di 1 e un massimo di 5.",
            "review" => "Puoi utilizzare un massimo di 100 caratteri per specificare il motivo del licenziamento.",
            // TypeOf
            "sender_type.in" => "Il tipo di entità deve essere un tipo valido tra SERVER, COMPANY e CITIZEN.",
            "sender_id.numeric" => "L'autore della recensione deve essere un ID valido.",
            "rate.numeric" => "Il voto da attribuire al Dipendente deve essere un numero valido.",
            "review.string" => "E' necessario specificare una descrizione testuale valida."
        ];
    }
}