<?php

namespace App\Http\Requests\Companies\Jobs\Applicants;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest {

    public function rules() {
        return [
            'status' => 'required|in:' . implode(",", \App\Enums\CompanyJobApplicantType::cases())
        ];
    }

    public function messages() {
        return [
            // Requireds
            'status.required' => "Si prega di specificare se si intende approvare o meno la candidatura.",
            // Validation
            'status.in' => "Deve essere un valore tra 'accepted', 'denied' e 'review'."
        ];
    }

}
