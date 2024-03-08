<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    public function run(): void {
        $users = array(
            [
                'uuid' => '8d4a100d738d40da9f3b8889a11527dc',
                'firstname' => 'Markus',
                'lastname' => 'Cohen',
                'nickname' => 'Rivenworth',
                'email' => "me@marcocusano.dev",
                'password' => '$2a$12$43xWchpgFBCsrzOStp32AetdBHkfnrKoag9.fgw6XI7c1d7nwh6tG' // marcocusano
            ],
            [
                'firstname' => 'Owner',
                'lastname' => 'Roleplay',
                'nickname' => 'Owner',
                'email' => 'owner@roleplay.test',
                'password' => '$2a$12$Bq4nNsimDBARRcSFl0uYTeIri.Dw4nKKvTUxkqLAFMzGuQ.B2DzWG' // owner
            ],
            [
                'firstname' => 'Admin',
                'lastname' => 'Roleplay',
                'nickname' => 'Admin',
                'email' => 'admin@roleplay.test',
                'password' => '$2a$12$i69aqb6HWdKpVWxFUKv/DuplK3g4tlYBxM11nSVd9b2so1w2Ss.2W' // admin
            ],
            [
                'uuid' => '04f39fc5642c401a857400e61e68b377',
                'firstname' => 'Pherenike',
                'lastname' => 'Lovelace',
                'nickname' => 'Veronica_mbv',
                'email' => 'veronica_mbv@roleplay.test',
                'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
            ]
        );

        foreach ($users as $user) { \App\Models\User::create($user); }

    }
}
