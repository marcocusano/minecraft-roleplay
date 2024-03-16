<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;

// Models
use App\Models\User;

class UsersSeeder extends Seeder {

    public function run(): void {

        $users = [];

        if (in_array(env('RP_SEED'), ['default', 'demo'])) {
            $users = array(
                [ /* 1 */
                    'uuid' => '8d4a100d738d40da9f3b8889a11527dc',
                    'firstname' => 'Markus',
                    'lastname' => 'Cohen',
                    'nickname' => 'Rivenworth',
                    'email' => "me@marcocusano.dev",
                    'password' => '$2a$12$Bq4nNsimDBARRcSFl0uYTeIri.Dw4nKKvTUxkqLAFMzGuQ.B2DzWG', // owner
                    'discord' => '',
                    'balance' => 9999999
                ],
                [ /* 2 */
                    'uuid' => '04f39fc5642c401a857400e61e68b377',
                    'firstname' => 'Pherenike',
                    'lastname' => 'Lovelace',
                    'nickname' => 'Veronica_mbv',
                    'email' => 'veronica_mbv@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 3 */
                    'firstname' => 'Owner',
                    'lastname' => 'Roleplay',
                    'nickname' => 'Owner',
                    'email' => 'owner@roleplay.test',
                    'password' => '$2a$12$Bq4nNsimDBARRcSFl0uYTeIri.Dw4nKKvTUxkqLAFMzGuQ.B2DzWG' // owner
                ],
                [ /* 4 */
                    'firstname' => 'Admin',
                    'lastname' => 'Roleplay',
                    'nickname' => 'Admin',
                    'email' => 'admin@roleplay.test',
                    'password' => '$2a$12$i69aqb6HWdKpVWxFUKv/DuplK3g4tlYBxM11nSVd9b2so1w2Ss.2W' // admin
                ],
                // Minecredit
                [ /* 5 */
                    'firstname' => 'Christopher',
                    'lastname' => 'Evans',
                    'nickname' => 'chris.evans',
                    'email' => 'c.evans@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 6 */
                    'firstname' => 'Sarah',
                    'lastname' => 'Johnson',
                    'nickname' => 'sarah.johnson',
                    'email' => 's.johnson@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 7 */
                    'firstname' => 'Samantha',
                    'lastname' => 'Miller',
                    'nickname' => 'samantha.miller',
                    'email' => 's.miller@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                // CyberTek
                [ /* 8 */
                    'firstname' => 'Michael',
                    'lastname' => 'Patel',
                    'nickname' => 'michael.patel',
                    'email' => 'm.patel@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 9 */
                    'firstname' => 'Jennifer',
                    'lastname' => 'Smith',
                    'nickname' => 'jennifer.smith',
                    'email' => 'j.smith@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                // Police
                [ /* 10 */
                    'firstname' => 'Daya',
                    'lastname' => 'Diaz',
                    'nickname' => 'daya.diaz',
                    'email' => 'd.diaz',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 11 */
                    'firstname' => 'Daniel',
                    'lastname' => 'Brown',
                    'nickname' => 'daniel.brown',
                    'email' => 'd.brown@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ],
                [ /* 12 */
                    'firstname' => 'Jessica',
                    'lastname' => 'Martinez',
                    'nickname' => 'jessica.martinez',
                    'email' => 'j.martinez@roleplay.test',
                    'password' => '$2a$12$56g0sQ3vBPT2pWIFvl/VRuNWYYm2QpfuLGusn3QSbVu0.JgJkW24e' // test
                ]
            );
        } else {
            $users = array(
                [
                    'firstname' => 'Admin',
                    'lastname' => 'Roleplay',
                    'nickname' => 'Admin',
                    'email' => 'admin@roleplay.test',
                    'password' => '$2a$12$i69aqb6HWdKpVWxFUKv/DuplK3g4tlYBxM11nSVd9b2so1w2Ss.2W', // admin
                    'balance' => 9999999
                ]
            );
        }

        foreach ($users as $user) { User::create($user); }

    }
}
