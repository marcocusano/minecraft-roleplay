<?php

namespace App\Http\Requests\Login;

// Laravel
use Illuminate\Foundation\Http\FormRequest;

class DiscordRequest extends FormRequest {

    public function rules() {
        return [
            'redirect_uri' => 'required|string',
            'scope' => 'nullable|string',
            'code' => 'required|string'
        ];

    }

    public function messages() {
        return [
           // Requireds
           'redirect_uri.required' => 'Si prega di inviare un link di redirect una volta effettuato il Login.',
           'scope.required' => 'Si prega di inviare correttamente la lista permessi.',
           // TypeOf
           'redirect_uri.string' => 'I link di redirect deve essere una stringa valida.',
           'scope.string' => 'La lista permessi deve essere una stringa valida.',
           'code.string' => 'Il codice di scambio deve essere una stringa valida.'
        ];
    }

}