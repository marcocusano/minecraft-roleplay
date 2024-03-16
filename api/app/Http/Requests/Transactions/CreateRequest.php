<?php

namespace App\Http\Requests\Transactions;

use Illuminate\Foundation\Http\FormRequest;

// Enums
use App\Enums\EntityType;
use App\Enums\PaymentMethodType;
use App\Enums\TransactionType;

class CreateRequest extends FormRequest {

    public function rules() {
        return [
            'type' => 'required|in:' . implode(",", TransactionType::cases()),
            'sender_type' => 'required|in:' . implode(",", EntityType::cases()),
            'sender_id' => 'nullable|numeric',
            'receiver_type' => 'required|in:' . implode(",", EntityType::cases()),
            'receiver_id' => 'nullable|numeric',
            'payment_method' => 'nullable|in:' . implode(",", PaymentMethodType::cases()),
            'description' => 'nullable|string|max:255',
            'created_at' => 'required|datetime',
            'updated_at' => 'datetime',
            'updated_by' => 'nullable|exists:users,id',
            'amount' => 'numeric|max:999999999',
            'status' => 'numeric|min:-2|max:1' // -2 = Refunded | -1 = Canceled | 0 = Pending | 1 = Confirmed -> (Default: 0)
        ];

    }

    public function messages() {
        return [
            // Requireds
            'type.required' => "E' necessario specificare almeno un tipo di transazione.",
            'sender_type.required' =>  "E' necessario specificare chi ha emesso il pagamento.",
            'receiver_type.required' => "E' necessario specificare chi ha ricevuto il pagamento.",
            'created_at.required' => "E' necessario specificare quando è stato emesso il pagamento.",
            'status.required' => "E' necessario specificare lo stato corrente del pagamento",
            // Types
            'sender_id.numeric' => "E' necessario specificare un ID numerico dell'Entità che ha emesso il pagamento quando si tratta di un Giocatore oppure un'Azienda.",
            'receiver_id.numeric' => "E' necessario specificare un ID numerico dell'Entità che ha ricevuto il pagamento quando si tratta di un Giocatore oppure un'Azienda.",
            'created_at.datetime' => "L'assegnazione della data di creazione della transazione è richiesto nel seguente formato: YYYY-MM-DD HH:ii:ss.",
            'updated_at.datetime' => "L'assegnazione di una data di aggiornamento della transazione è richiesto nel seguente formato: YYYY-MM-DD HH:ii:ss.",
            'amount.numeric' => "Rappresenta il valore della transazione, necessariamente in valore numerico.",
            'status.numeric' => "Rappresenta lo stato corrente della transazione, necessariamente in valore numerico."
        ];
    }

}