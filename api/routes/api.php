<?php

// Controllers
use App\Http\Controllers\Companies;
use App\Http\Controllers\Debug;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\Transactions;

// Laravel
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Version 1.x

Route::group(['prefix' => "v1"], function () {

    Route::middleware('auth:sanctum')->get("/me", function (Request $request) {
        return $request->user();
    });

    ///////////////
    // Companies //
    ///////////////

    /* Company C.R.U.D. based */

    Route::prefix('/companies')->name('companies.')->controller(Companies::class)->group(function() {

        // Jobs
        Route::GET("/jobs", 'allJobs')->name('jobs.all'); // Retrieve all Jobs by any Company

        // A.C.R.U.D.
        Route::GET('/', 'all')->name('all'); // Get all existing Companies
        Route::POST('/', 'create')->name('create');  // Create a brand new Company
        Route::GET("/{slug}", 'readBySlug')->name('readBySlug'); // Get an existing Company by Slug
        Route::GET('/{id}', 'read')->name('read'); // Get an existing Company
        Route::PUT('/{id}', 'update')->name('update'); // Update an existing Company
        Route::DELETE("/{id}", 'delete')->name('delete'); // Delete an existing Company

        // Relations
        Route::GET("/{id}/owner", 'owner')->name('owner'); // Get the Owner of that Company (the Director)
        Route::GET("/{id}/parent", 'parent')->name('parent'); // Get the Parent Company

        /* Employees */
        Route::prefix('/{id}/employees')->name('employees.')->group(function() {
            Route::GET("/", 'employees')->name('all'); // Retrieve all Company Employees
            Route::POST("/", 'hireEmployee')->name('create'); // Hire Employee
            Route::GET("/{userId}", 'getEmployee')->name('read'); // Get an existing User Employee
            Route::PUT("/{userId}", 'promoteEmployee')->name('update'); // Promote Employee
            Route::DELETE("/{userId}", 'fireEmployee')->name('delete'); // Fire Employee
        });

        /* Jobs */
        Route::prefix('/{id}/jobs')->name('jobs.')->group(function() {
            Route::GET("/", 'jobs')->name('all'); // Retrieve all Jobs by a Company
            Route::POST("/", 'createJob')->name('create'); // Create a new Company Job announcement
            Route::GET("/{jobId}", 'getJob')->name('read'); // Get an existing Company Job announcement
            Route::PUT("/{jobId}", 'updateJob')->name('update'); // Update an existing Company Job announcement
            Route::DELETE("/{jobId}", 'deleteJob')->name('delete'); // Delete an existing Company Job announcement
            /* Job Applicants */
            Route::prefix("/{jobId}/applicants")->name('applicants.')->group(function() {
                Route::GET("/", 'jobApplicants')->name('all'); // Retrieve all Company Job Applicants
                Route::PATCH("/{userId}", 'updateJobApplicant')->name('update'); // Updated an existing Company Job Applicant
            });
        });

        /* Roles */
        Route::prefix('/{id}/roles')->name('roles.')->group(function() {
            Route::GET("/", 'roles')->name('all'); // Retrieve all Roles by a Company
            Route::POST("/", 'createRole')->name('create'); // Create a new Company Role
            Route::GET("/{roleId}", 'getRole')->name('read'); // Get an existing Company Role
            Route::PUT('/{roleId}', 'updateRole')->name('update'); // Update an existing Company Role
            Route::DELETE("/{roleId}", 'deleteRole')->name('delete'); // Delete an existing Company Role
        });      
                
    });

    /////////////
    // Reviews //
    /////////////

    Route::prefix('/reviews')->name('reviews.')->controller(Reviews::class)->group(function() {

        // A.C.R.U.D.
        Route::GET('/', 'all')->name('all');
        Route::POST('/', 'create')->name('create');
        Route::GET('/{id}', 'read')->name('read');
        Route::PATCH('/{id}', 'update')->name('update');

        // Relations
        Route::GET('/{id}/receiver', 'receiver')->name('receiver');
        Route::GET('/{id}/sender', 'sender')->name('sender');

    });

    //////////////////
    // Transactions //
    //////////////////

    Route::prefix('/transactions')->name('transactions.')->controller(Transactions::class)->group(function () {

        // A.C.R.U.D.
        Route::GET('/', 'all')->name('all'); // Retrieve all Transactions
        Route::POST('/', 'create')->name('create'); // Generate a new Transaction
        Route::GET('/{id}', 'read')->name('read'); // Get an existing Transaction
        Route::PATCH('/{id}', 'update')->name('update'); // Update an existing Transaction

        // Relations
        Route::GET("/{id}/receiver", 'receiver')->name('receiver'); // Get Receiver Entity of an existing Transaction
        Route::GET("/{id}/sender", 'sender')->name('sender'); // Get Sender Entity of an existing Transaction
        Route::GET("/{id}/updater", 'updater')->name('updater'); // Get Updater Entity of an existing Transaction

    });

    //////////////
    // Debugger //
    //////////////

    Route::GET("/debug", [Debug::class, 'get']);

});