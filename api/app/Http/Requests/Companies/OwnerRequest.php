<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest {

    public function rules() {
        return [
            'owner_id' => 'required|unique|exists:users,id',
        ];
    }

    public function messages() {
        return [
            // Uniques
            "owner_id.unique" => "Non è possibile assegnare la direzione di più Aziende allo stesso Giocatore. Si prega di specificare un nuovo Giocatore, quindi riprovare.",
            // Requireds
            "owner_id.required" => "E' necessario specificare un Giocatore a cui assegnare la direzione di quest'Azienda, quindi riprovare."
        ];
    }

}
