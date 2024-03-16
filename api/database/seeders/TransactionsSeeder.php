<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder {

    public function run():void {

        $transactions = [];

        if (env('RP_SEED') === 'demo') {
            $transactions = array(
                [
                    'type' => 'RECEIPT',
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 1,
                    'receiver_type' => 'COMPANY',
                    'receiver_id' => 2,
                    'description' => "OnePlus 10 Pro (Color: Emerald)",
                    'amount' => 866.90,
                    'payment_method' => 'CARD',
                    'created_at' => '2023/04/10 15:30:00',
                    'updated_at' => '2023/04/12 10:00:00',
                    'status' => 1
                ],
                [
                    'type' => 'TRANSFER',
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 2,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' => 3,
                    'description' => "500g Pure Cocaine",
                    'amount' => 350,
                    'created_at' => '2023/06/01 03:00:00',
                    'updated_at' => '2023/06/01 09:00:00',
                    'status' => -1
                ],
                [
                    'type' => 'CHECK',
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 1,
                    'receiver_type' => 'COMPANY',
                    'receiver_id' => 4,
                    'description' => 'Salary that you will never see',
                    'amount' => 3000,
                    'created_at' => '2023/06/15 15:30:00'
                ],
                [
                    'type' => 'TRANSFER',
                    'sender_type' => 'COMPANY',
                    'sender_id' => 1,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' => 3,
                    'description' => 'Sep. Salary 2023',
                    'amount' => 1500,
                    'created_at' => '2023/10/10 08:30:00',
                    'updated_at' => '2023/10/10 09:00:00',
                    'status' => 1
                ],
                [
                    'type' => 'DEPOSIT',
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 3,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' => 3,
                    'description' => 'Deposit of Aug. 2023 Salary',
                    'amount' => 1500,
                    'created_at' => '2023/10/10 18:30:00',
                    'updated_at' => '2023/10/10 18:30:00',
                    'status' => 1
                ]
            );
        } else {
            $transactions = [
                [
                    "type" => "CASH",
                    "sender_type" => "SERVER",
                    "sender_id" => null,
                    "receiver_type" => "CITIZEN",
                    "receiver_id" => 1,
                    "description" => "Welcome to my awesome Roleplay",
                    "amount" => 9999999,
                    "payment_method" => null,
                    "created_at" => now(),
                    "updated_at" => now(),
                    "updated_by" => null,
                    "status" => 1
                ]
            ];
        }

        foreach($transactions as $transaction) { Transaction::create($transaction); }

    }

}