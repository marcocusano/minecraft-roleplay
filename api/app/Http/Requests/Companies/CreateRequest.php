<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

    public function rules() {
        return [
            'parent_id' => 'nullable|numeric|exists:companies,id;',
            'owner_id' => 'nullable|unique|exists:users,id',
            'luckperms' => 'nullable|json',
            'name' => 'required|unique|string|min:3|max:50',
            'description' => 'nullable|string|max:255',
            'location' => 'nullable|json',
            'permissions' => 'nullable|json',
            'icon' => 'nullable|string|min:3|max:30',
            'is_public' => 'nullable|boolean',
            'is_police' => 'nullable|boolean',
            'is_hackerable' => 'nullable|boolean',
            'is_master' => 'nullable|boolean',
            'balance' => 'numeric|max:999999999',
            'updated_at' => 'nullable|datetime'
        ];
    }

    public function messages() {
        return [
            // Requireds
            "name.required" => "Il nome dell'Azienda è obbligatorio.",
            // Uniques
            "name.unique" => "Non possono esistere più Aziende con lo stesso nome.",
            "owner_id.unique" => "Non è possibile attribuire più Aziende ad uno stesso giocatore",
            // Types
            "parent_id.numeric" => "L'Azienda padre deve essere un valore numerico ed esistere già come Azienda disponibile.",
            "owner_id.numeric" => "Il Direttore di questa Azienda deve essere un Giocatore valido.",
            "is_public.boolean" => "Specifica un valore vero o falso, che indichi se è un'Azienda Pubblica o meno.",
            "is_police.boolean" => "Specifica un valore vero o falso, che indichi se è un'Azienda appartenente a forze dell'ordine",
            "is_hackerable.boolean" => "Specifica un valore vero o false, che indichi se è un'Azienda che può o meno essere Hackerata",
            "is_master.boolean" => "Specifica un valore vero o falso, che indichi se è un'Azienda con tutti i permessi sbloccati all'interno del portale.",
            "balance.numeric" => "Si prega di specificare un valore numerico valido per aggiornare il bilancio dell'Azienda.",
            "created_at.datetime" => "La data di creazione dell'Azienda deve corrispondere ad una Data e Ora.",
            "updated_at.datetime" => "La data di aggiornamento anagrafico dell'Azienda deve corrispondere ad una Data e Ora."
        ];
    }

}
