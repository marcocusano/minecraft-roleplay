<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;
// Models
use App\Models\CompanyRole;
// Utilities
use App\Utilities\Permission;


class CompanyRolesSeeder extends Seeder {

    public function run(): void {

        $roles = [];

        if (env('RP_SEED') === 'demo') {

            $roles = [
                // Cybertek
                [ /* 1 */
                    'company_id' => 1,
                    'name' => "Cyber Security",
                    'description' => 'Protect computer systems, networks and data from digital attacks, unauthorized access and data breaches.',
                    'salary' => 3500,
                    'permissions' => [
                        'cybertek.hacking' => (new Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'jobs' => (new Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'transactions' => (new Permission)->create(false)->read(true)->toArray(),
                    ]
                ],
                [ /* 2 */
                    'company_id' => 1,
                    'name' => 'Sales Agent',
                    'description' => 'Promote and sell any kind of product and service.',
                    'salary' => 2500,
                    'permissions' => [
                        'transactions' => (new Permission)->create(true)->read(false)->toArray()
                    ]
                ],
                [ /* 3 */
                    'company_id' => 3,
                    'name' => 'Recruiter',
                    'description' => 'Responsible for sourcing, screening, and selecting candidates for job openings.',
                    'permissions' => [
                        'jobs' => (new Permission)->create(false)->read(true)->update(true)->delete(false)->toArray()
                    ]
                ]
            ];

        } else if (env('RP_SEED') === 'default') {

            $roles = [
                // Minecredit
                [ /* 1 */
                    'company_id' => 1,
                    'name' => "Teller",
                    'description' => 'Handlles customer transactions, such as deposits, withdrawals, and transfers.',
                    'salary' => 1500,
                    'permissions' => [
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                    ],
                ],
                [ /* 2 */
                    'company_id' => 1,
                    'name' => "Loan Officer",
                    'description' => 'Evaluates loan applications, assenses creditworthiness, and approves or denies loans.',
                    'salary' => 1500,
                    'permissions' => [
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                    ],
                ],
                [ /* 3 */
                    'company_id' => 1,
                    'name' => "Financial Advisor",
                    'description' => 'Provides guidance to clients on investments, financial planning and wealth management.',
                    'salary' => 1500,
                    'permissions' => [
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                        'bank.investments' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray()
                    ],
                ],
                // Cybertek
                [ /* 4 */
                    'company_id' => 2,
                    'name' => "Cyber Security",
                    'description' => 'Protect computer systems, networks and data from digital attacks, unauthorized access and data breaches.',
                    'salary' => 3500,
                    'permissions' => [
                        'cybertek.hacking' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'transactions' => (New Permission)->create(false)->read(true)->toArray()
                    ]
                ],
                [ /* 5 */
                    'company_id' => 2,
                    'name' => 'Sales Agent',
                    'description' => 'Promote and sell any kind of product and service.',
                    'salary' => 2500,
                    'permissions' => [
                        'transactions' => (New Permission)->create(true)->read(false)->toArray()
                    ]
                ],
                // Police
                [ /* 6 */
                    'company_id' => 4,
                    'name' => 'Detective',
                    'description' => 'Investigates crimes, gathers evidence, interviews witnesses and suspects, and solves cases.',
                    'salary' => 2000,
                    'permissions' => [
                        'police.evidences' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'police.penalties' => (New Permission)->create(false)->read(true)->update(true)->delete(false)->toArray(),
                    ]
                ],
                [ /* 7 */
                    'company_id' => 4,
                    'name' => 'Officer',
                    'description' => 'Enforces laws, maintains public order, and responds to emergencies, ensuring the safety and security of the Citizens.',
                    'salary' => 1900,
                    'permissions' => [
                        'police.penalties' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'police.evidences' => (New Permission)->create(false)->read(true)->update(false)->delete(false)->toArray()
                    ]
                ]
            ];

        }

        foreach ($roles as $role) { CompanyRole::create($role); }
    }
}
