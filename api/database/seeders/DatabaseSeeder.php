<?php

namespace Database\Seeders;

use Database\Seeders\UsersSeeder;
use Database\Seeders\CompaniesSeeder;
use Database\Seeders\TransactionsSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run(): void {

        $this->call(UsersSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(TransactionsSeeder::class);

        /*
            Write here your custom Database Seeder
        */

    }

}
