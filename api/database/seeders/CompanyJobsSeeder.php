<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;
// Models
use App\Models\CompanyJob;

class CompanyJobsSeeder extends Seeder {

    public function run(): void {

        $jobs = [];

        if (env('RP_SEED') === 'demo') {

            $jobs = [
                // CyberTek
                [ /* 1 */
                    'company_id' => 1,
                    'role_id' => 1,
                    'name' => "Cyber Security at CyberTek",
                    'description' => 'Join us as a Cyber Security Specialist and safeguard the digital future!',
                    'expires_at' => now()
                ],
                [ /* 2 */
                    'company_id' => 1,
                    'role_id' => 2,
                    'name' => "Sales Agent at CyberTek",
                    'description' => 'Join CyberTek as a Sales Agent and shape the future of commerce!',
                    'expires_at' => now()->addMonths(2)
                ],
            ];

        } else if (env('RP_SEED') === 'default') {

            $jobs = [
                // Minecredit
                [ /* 1 */
                    'company_id' => 1,
                    'role_id' => 3,
                    'name' => "Financial Advisor at Minecredit",
                    'description' => 'Provides guidance to clients on investments, financial planning and wealth management.',
                    'expires_at' => now()->addMonth()
                ],
                // CyberTek
                [ /* 2 */
                    'company_id' => 2,
                    'role_id' => 4,
                    'name' => "Cyber Security at CyberTek",
                    'description' => 'Join us as a Cyber Security Specialist and safeguard the digital future!',
                    'expires_at' => now()
                ],
                [ /* 3 */
                    'company_id' => 2,
                    'role_id' => 5,
                    'name' => "Sales Agent at CyberTek",
                    'description' => 'Join CyberTek as a Sales Agent and shape the future of commerce!',
                    'expires_at' => now()->addMonths(2)
                ]
            ];

        }

        foreach ($jobs as $job) { CompanyJob::create($job); }
    }
}
