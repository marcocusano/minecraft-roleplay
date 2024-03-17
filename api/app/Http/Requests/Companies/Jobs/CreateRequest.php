<?php

namespace App\Http\Requests\Companies\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

    public function rules() {
        return [
            'company_id' => 'required|exists:companies,id',
            'role_id' => 'required|exists:company_roles,id',
            'name' => 'required|string|min:3|max:100',
            'description' => 'nullable|string',
            'expires_at' => 'nullable|datetime',
            'status' => 'required|in:' . implode(",", \App\Enums\CompanyJobType::cases())
        ];
    }

    public function messages() {
        return [
            // Requireds
            'company_id.reqiured' => "Si prega di specificare un'Azienda valida per cui pubblicare un concorso.",
            'role_id.required' => "Si prega di specifiacre un ruolo di appartenenza all'Azienda valido per pubblicare un nuovo concorso.",
            'name.required' => "Si prega di attribuire un nome al concorso che si intende pubblicare.",
            // TypeOf
            'name.string' => "Si prega di specificare un nome valido per il concorso che si intende pubblicare.",
            'description.string' => "Si prega di specificare una descrizione valida per il concorso che si intende pubblicare.",
            'expires_at.datetime' => "Si prega di specificare una data valida per applicare una scadenza al concorso."
        ];
    }

}
