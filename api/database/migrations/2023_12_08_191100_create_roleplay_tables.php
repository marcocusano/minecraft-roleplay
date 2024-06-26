<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Companies
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('parent_id')->nullable();
            $table->bigInteger('owner_id')->unsigned()->unique()->nullable()->index()->foreign()->references('id')->on('users');
            $table->string('slug', 50)->unique();
            $table->string('name', 50);
            $table->string('description')->nullable();
            $table->json('location')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('is_government')->default(false);
            $table->boolean('is_police')->default(false);
            $table->boolean('is_hackerable')->default(true);
            $table->boolean('is_master')->default(false);
            $table->json('permissions')->nullable();
            $table->double('balance')->default(0);
            $table->datetimes();
        });

        // Company Roles
        Schema::create('company_roles', function(Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('company_id')->index()->foreign()->references('id')->on('companies');
            $table->string('name', 100)->unique();
            $table->text('description')->nullable();
            $table->json('permissions')->nullable();
            $table->double('salary')->default(0);
            $table->datetimes();
        });

        // Company Employees
        Schema::create('company_employees', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('company_id')->unsigned()->index();
            $table->bigInteger('role_id')->index();
            $table->datetimes(); // created_at = Hire Date; updated_at = Last payment Date;
        });

        // Company Jobs
        Schema::create('company_jobs', function(Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('company_id')->unsigned()->index()->foreign()->references('id')->on('companies');
            $table->bigInteger('role_id')->unsigned()->index()->foreign()->references('id')->on('company_roles');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->datetimes();
            $table->datetime('expires_at');
            $table->enum('status', \App\Enums\CompanyJobType::cases())->default(\App\Enums\CompanyJobType::ACTIVE);
        });

        // Company Job Subscribers
        Schema::create('company_job_applicants', function(Blueprint $table) {
            $table->bigInteger('job_id')->unsigned()->index()->foreign()->references('id')->on('company_jobs');
            $table->bigInteger('user_id')->unsigned()->index()->foreign()->references('id')->on('users');
            $table->datetimes();
            $table->enum('status', \App\Enums\CompanyJobApplicantType::cases())->default(\App\Enums\CompanyJobApplicantType::UNDER_REVIEW);
        });

        // Reviews
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('sender_type', 10)->index(); // SERVER, CITIZEN, COMPANY
            $table->bigInteger('sender_id')->nullable()->unsigned()->index(); // $user->id || $company->id || null
            $table->string('receiver_type', 10)->index(); // SERVER, CITIZEN, COMPANY
            $table->bigInteger('receiver_id')->nullable()->unsigned()->index(); // $user->id || $company->id || null
            $table->text('review')->nullable();
            $table->datetimes();
            $table->tinyInteger('rate');
        });

        // Transactions
        Schema::create('transactions', function(Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('type', 10)->index(); // ATM, CASH, CHECK, DEPOSIT, RECEIPT, TRANSFER
            $table->string('sender_type', 10)->index(); // SERVER, CITIZEN, COMPANY
            $table->bigInteger('sender_id')->nullable()->unsigned()->index(); // $user->id || $company->id || null
            $table->string('receiver_type', 10)->index(); // SERVER, CITIZEN, COMPANY
            $table->bigInteger('receiver_id')->nullable()->unsigned()->index(); // $user->id || $company->id || null
            $table->string('payment_method', 10)->nullable(); // CASH, CARD, PHONE
            $table->string('description', 150);
            $table->double('amount');
            $table->datetimes();
            $table->bigInteger('updated_by')->unsigned()->index()->nullable()->foreign()->references('id')->on('users');
            $table->tinyInteger('status')->default(0);
        });

        // User Documents
        Schema::create('user_documents', function(Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('user_id')->unsigned()->index()->foreign()->references('id')->on('users');
            $table->string('type', 5)->index(); // ID, A, B, D, X, LTZ
            $table->string('value')->index();
            $table->string('description')->nullable();
            $table->string('issuer_type')->index(); // SERVER, CITIZEN, COMPANY
            $table->bigInteger('issued_by')->unsigned()->index();
            $table->dateTime('issued_at')->useCurrent();
            $table->dateTime('expired_at');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_roles');
        Schema::dropIfExists('company_employees');
        Schema::dropIfExists('company_jobs');
        Schema::dropIfExists('company_job_applicants');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('user_documents');
    }
};
