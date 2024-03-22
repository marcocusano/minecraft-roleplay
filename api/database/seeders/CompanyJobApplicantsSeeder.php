<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;
// Models
use App\Models\CompanyJobApplicant;
// Enums
use App\Enums\CompanyJobApplicantType;

class CompanyJobApplicantsSeeder extends Seeder {

    public function run(): void {

        $applicants = [];

        if (env('RP_SEED') === 'demo') {

            $applicants = [
                // CyberTek
                [
                    'user_id' => 6,
                    'job_id' => 1,
                    'status' => CompanyJobApplicantType::ACCEPTED
                ],
                [
                    'user_id' => 7,
                    'job_id' => 1,
                    'status' => CompanyJobApplicantType::UNDER_REVIEW
                ],
                [
                    'user_id' => 9,
                    'job_id' => 2,
                    'status' => CompanyJobApplicantType::DENIED
                ],
                [
                    'user_id' => 10,
                    'job_id' => 2,
                    'status' => CompanyJobApplicantType::ACCEPTED
                ],
            ];

        } else if (env('RP_SEED') === 'default') {

            $applicants = [
                // CyberTek
                [
                    'user_id' => 6,
                    'job_id' => 2,
                    'status' => CompanyJobApplicantType::ACCEPTED
                ],
                [
                    'user_id' => 7,
                    'job_id' => 2,
                    'status' => CompanyJobApplicantType::UNDER_REVIEW
                ],
                [
                    'user_id' => 9,
                    'job_id' => 3,
                    'status' => CompanyJobApplicantType::DENIED
                ],
                [
                    'user_id' => 10,
                    'job_id' => 3,
                    'status' => CompanyJobApplicantType::ACCEPTED
                ],
            ];

        }

        foreach ($applicants as $applicant) { CompanyJobApplicant::create($applicant); }
    }
}
