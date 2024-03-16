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

        if (in_array(env('RP_SEED'), array('default', 'demo'))) {

            $roles = [
                // Minecredit
                [ /* 1 */
                    'company_id' => 1,
                    'name' => "Teller",
                    'description' => 'Handlles customer transactions, such as deposits, withdrawals, and transfers.',
                    'salary' => 1500,
                    'permissions' => json_encode([
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                    ]),
                ],
                [ /* 2 */
                    'company_id' => 1,
                    'name' => "Loan Officer",
                    'description' => 'Evaluates loan applications, assenses creditworthiness, and approves or denies loans.',
                    'salary' => 1500,
                    'permissions' => json_encode([
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                    ]),
                ],
                [ /* 3 */
                    'company_id' => 1,
                    'name' => "Financial Advisor",
                    'description' => 'Provides guidance to clients on investments, financial planning and wealth management.',
                    'salary' => 1500,
                    'permissions' => json_encode([
                        'trasactions' => (New Permission)->create(true)->read(true)->toArray(),
                        'bank.investments' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray()
                    ]),
                ],
                // Cybertek
                [ /* 4 */
                    'company_id' => 2,
                    'name' => "Cyber Security",
                    'description' => 'Protect computer systems, networks and data from digital attacks, unauthorized access and data breaches.',
                    'salary' => 3500,
                    'permissions' => json_encode([
                        'cybertek.hacking' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'transactions' => (New Permission)->create(false)->read(true)->toArray()
                    ])
                ],
                [ /* 5 */
                    'company_id' => 2,
                    'name' => 'Commercial Agent',
                    'description' => 'Promote and sell any kind of product and service.',
                    'salary' => 2500,
                    'permissions' => json_encode([
                        'transactions' => (New Permission)->create(true)->read(false)->toArray()
                    ])
                ],
                // Police
                [ /* 6 */
                    'company_id' => 4,
                    'name' => 'Detective',
                    'description' => 'Investigates crimes, gathers evidence, interviews witnesses and suspects, and solves cases.',
                    'salary' => 2000,
                    'permissions' => json_encode([
                        'police.evidences' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'police.penalties' => (New Permission)->create(false)->read(true)->update(true)->delete(false)->toArray(),
                    ])
                ],
                [ /* 7 */
                    'company_id' => 4,
                    'name' => 'Officer',
                    'description' => 'Enforces laws, maintains public order, and responds to emergencies, ensuring the safety and security of the Citizens.',
                    'salary' => 1900,
                    'permissions' => json_encode([
                        'police.penalties' => (New Permission)->create(true)->read(true)->update(true)->delete(true)->toArray(),
                        'police.evidences' => (New Permission)->create(false)->read(true)->update(false)->delete(false)->toArray()
                    ])
                ]
            ];

        }

        foreach ($roles as $role) { CompanyRole::create($role); }
    }
}
