<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder {

    public function run():void {

        $companies = array(
            [
                'owner_id' => 1,
                'name' => 'Cybertek', // Thanks to Rivenworth for Idea, Logo, Name and Management Scam System: No longer exists cuz of some Pizza Developers.
                'description' => 'Digital provider and managament system Owner. The owner of this Company is just a Failure and a Scammer! But hey... the publish date was on June 2023 ❤️',
                'is_public' => false,
                'is_police' => false,
                'is_master' => true,
                'balance' => 157457235.25,
                'created_at' => '2023/05/01 15:00:00',
                'updated_at' => '2023/05/01 10:00:00'
            ],
            [
                'owner_id' => 4,
                'name' => 'SwipeUp', // Thanks to Veronica_mbv for Logo and Name
                'description' => 'Mobile Phone and Infrastructure Company.',
                'is_public' => false,
                'is_police' => false,
                'is_master' => false,
                'balance' => 5739244.50,
                'created_at' => '2023/05/01 16:00:00',
                'updated_at' => '2023/05/01 16:00:00'
            ],
            [
                'name' => 'YouTubeNoosMegaPisa',
                'description' => 'Leaders of ClosedBetaSince1950RP: "Your lawyers do not scare me!".',
                'is_public' => true,
                'is_police' => false,
                'is_master' => true,
                'balance' => 0,
            ],
            [
                'name' => 'CrodinoAlfieri',
                'description' => 'A Clown Clothes Company.',
                'is_public' => false,
                'is_police' => false,
                'is_master' => false,
                'balance' => -1
            ]
        );

        foreach($companies as $company) { Company::create($company); }

    }

}