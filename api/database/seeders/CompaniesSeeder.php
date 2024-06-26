<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder {

    public function run():void {

        $companies = [];

        if (env('RP_SEED') === 'demo') {

            $companies = array(
                [ /* 1 */
                    'owner_id' => 1,
                    'slug' => 'cybertek',
                    'name' => 'Cybertek', // Thanks to Rivenworth for Ideas, Logo, Name and Management Scam System: No longer exists cuz of some Pizza Developers.
                    'description' => 'Digital provider and managament system Owner. The owner of this Company is just a Failure and a Scammer! But hey... the publish date was on June 2023 ❤️',
                    'icon' => 'microchip',
                    'is_hackerable' => false,
                    'is_master' => true,
                    'balance' => 157457235.25,
                    'created_at' => '2023/05/01 15:00:00',
                    'updated_at' => '2023/05/01 15:00:00'
                ],
                [ /* 2 */
                    'owner_id' => 2,
                    'slug' => 'swipeup',
                    'name' => 'SwipeUp', // Thanks to Veronica_mbv for Ideas, Logo and Name
                    'description' => 'Mobile Phone and Infrastructure Company.',
                    'icon' => 'mobile',
                    'balance' => 5739244.50,
                    'created_at' => '2023/05/01 16:00:00',
                    'updated_at' => '2023/05/01 16:00:00'
                ],
                [ /* 3 */
                    /* 'owner_id' => 404 */
                    'slug' => 'ytmega',
                    'name' => 'YouTubeNoosMegaPisa',
                    'description' => 'Leaders of ClosedBetaSince1950RP: "Your lawyers do not scare me!".',
                    'icon' => 'poo',
                    'is_government' => true,
                    'balance' => 0,
                ],
                [ /* 4 */
                    /* 'owner_id' => CLOWN */
                    'slug' => 'clown',
                    'name' => 'CrodinoAlfione',
                    'icon' => 'poop',
                    'description' => 'A Clown Clothes Company.',
                    'balance' => -1
                ]
            );

        } else if (env('RP_SEED') === 'default') {

            $companies = [
                [ /* 1 */
                    'owner_id' => 5,
                    'slug' => 'minecredit',
                    'name' => 'Minecredit',
                    'description' => 'Financial institution that offers services llike storing money, facilitating transactions and financial services.',
                    'icon' => 'piggy-bank',
                    'is_hackerable' => false, // Cannot be hacked
                    'permissions' => json_encode([
                        'companies.read' => ['*'],
                        'companies.transactions.read' => ['*']
                    ]),
                    'balance' => 999999999999
                ],
                [ /* 2 */
                    'owner_id' => 1,
                    'slug' => 'cybertek',
                    'name' => 'CyberTek',
                    'description' => 'Technology solutions, software and services to meet the needs of Clients.',
                    'icon' => 'microchip',
                    'is_government' => true,
                    'is_police' => false,
                    'is_hackerable' => false, // Cannot be hacked
                    'is_master' => true,  // Can access to all Companies and informations
                    'balance' => 999999999,
                ],
                [ /* 3 */
                    'slug' => 'government',
                    'name' => 'Government',
                    'description' => 'Activities associated with governance and decision-making within your society.',
                    'icon' => 'landmark-flag',
                    'is_government' => true,
                    'is_hackerable' => false, // Cannot be hacked
                    'is_master' => true, // Can access to all Companies and informations
                    'balance' => 999999999999
                ],
                [ /* 4 */
                    'slug' => 'police',
                    'owner_id' => 10,
                    'parent_id' => 3,
                    'name' => 'Police Department',
                    'description' => 'Law enforcement agency tasked with maintaining public safety.',
                    'icon' => 'handcuffs',
                    'is_government' => true,
                    'is_police' => true,
                    'balance' => 0, // Managed by Politics parent Company
                    
                ],
                [ /* 5 */
                    'slug' => 'city-hall',
                    'parent_id' => 3,
                    'name' => 'City Hall',
                    'description' => 'Serves as the central hub for municipal administration and governance.',
                    'icon' => 'landmark-dome',
                    'is_government' => true,
                    'is_police' => false,
                    'is_master' => false,
                    'balance' => 0, // Managed by Politics parent Company
                ],
                [ /* 6 */
                    'slug' => 'hospital',
                    'parent_id' => 3,
                    'name' => 'Hospital',
                    'description' => 'Medical facility providing healthcare services, including treatment, diagnosis, and care for patients with illness and injuries.',
                    'icon' => 'hospital',
                    'is_government' => true,
                    'balance' => 0, // Managed by Politics parent Company
                ],
                [ /* 7 */
                    'slug' => 'court',
                    'parent_id' => 3,
                    'name' => 'Court',
                    'description' => 'Legal institutions responsible for resolving disputes and administering justice based on laws and regulations.',
                    'icon' => 'gavel',
                    'is_government' => true,
                    'balance' => 0, // Managed by Politics parent Company
                ],
                [ /* 8 */
                    'slug' => 'prosecutors',
                    'parent_id' => 3,
                    'name' => 'Prosecutors',
                    'description' => 'Legal professionals who represent the government in criminall cases, responsible for presenting evicecnde, initiating charges, and pursuing convictions against individuals accused of committing crimes.',
                    'icon' => 'landmark',
                    'is_government' => true,
                    'balance' => 0 // Managed by Politiccs parent Company
                ],
            ];

        }

        foreach($companies as $company) { Company::create($company); }

    }

}