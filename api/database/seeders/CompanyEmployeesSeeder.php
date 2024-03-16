<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;
// Models
use App\Models\CompanyEmployee;


class CompanyEmployeesSeeder extends Seeder {

    public function run(): void {

        $employees = [];

        if (env('RP_SEED') === 'demo') {

            $employees = [
                // Cybertek
                [
                    'company_id' => 1,
                    'user_id' => 8,
                    'role_id' => 4
                ],
                [
                    'company_id' => 1,
                    'user_id' => 9,
                    'role_id' => 5
                ]
            ];

        } else if (env('RP_SEED') === 'default') {

            $employees = [
                // Minecredit
                [
                    'company_id' => 1,
                    'user_id' => 6,
                    'role_id' => 1
                ],
                [
                    'company_id' => 1,
                    'user_id' => 7,
                    'role_id' => 2
                ],
                // CyberTek
                [
                    'company_id' => 2,
                    'user_id' => 8,
                    'role_id' => 4
                ],
                [
                    'company_id' => 2,
                    'user_id' => 9,
                    'role_id' =>  5
                ],
                // Police
                [
                    'company_id' => 4,
                    'user_id' => 11,
                    'role_id' => 6,
                ],
                [
                    'company_id' => 4,
                    'user_id' => 12,
                    'role_id' => 7
                ]
            ];

        }

        foreach ($employees as $employee) { CompanyEmployee::create($employee); }
    }
}
