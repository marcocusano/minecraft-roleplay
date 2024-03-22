<?php

namespace Database\Seeders;

use Database\Seeders\UsersSeeder;
use Database\Seeders\CompaniesSeeder;
use Database\Seeders\CompanyRolesSeeder;
use Database\Seeders\CompanyEmployeesSeeder;
use Database\Seeders\CompanyJobsSeeder;
use Database\Seeders\CompanyJobApplicantsSeeder;
use Database\Seeders\TransactionsSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run(): void {

        // Users
        $this->call(UsersSeeder::class);
        
        // Companies
        $this->call(CompaniesSeeder::class);
        $this->call(CompanyRolesSeeder::class);
        $this->call(CompanyEmployeesSeeder::class);
        $this->call(CompanyJobsSeeder::class);
        $this->call(CompanyJobApplicantsSeeder::class);
        
        // Transactions
        $this->call(TransactionsSeeder::class);

        // Reviews
        $this->call(ReviewsSeeder::class);

        /*
            Write here your custom Database Seeder
        */

    }

}
