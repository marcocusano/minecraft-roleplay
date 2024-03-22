<?php

namespace App\Http\Requests\Reviews;

// Laravel
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest {

    public function rules() {
        return [
            'review' => 'nullable|string|max:1000',
            'rate' => 'required|numeric|min:1|max:5'
        ];
    }

    public function messages() {
        return [
            // Requireds
            'rate.required' => "Si prega di specificare una valutazione da 1 a 5 stelle.",
            // TypeOf
            'review.string' => "Si prega di scrivere una recensione testuale valida, di massimo 1.000 caratteri.",
            'rate.numeric' => "Si prega di specificare una valutazione numerica valida, compresa tra 1 e 5."
        ];
    }

}
