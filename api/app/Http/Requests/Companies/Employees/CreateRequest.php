<?php

namespace App\Http\Requests\Companies\Employees;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

    public function rules() {
        return [
            'user_id' => 'required|unique:company_employees,user_id|exists:users,id',
            'role_id' => 'required|exists:company_roles,id'
        ];
    }

    public function messages() {
        return [
            // Uniques
            "user_id.unique" => "Non è possibile assegnare un Dipendente a più Aziende contemporaneamente o alla stessa Azienda.",
            // Exists
            "user_id.exists" => "L'Utente che si intende assumere non è ancora iscritto all'Anagrafica.",
            "role_id.exists" => "Questo ruolo aziendale non sembra esistere.",
            // Requireds
            "user_id.required" => "E' necessario specificare un Utente da assumere, quindi riprovare.",
            "role_id.required" => "E' necessario attribuire un ruolo Aziendale per questo Utente per poterlo assumere, quindi riprovare."
        ];
    }
}

