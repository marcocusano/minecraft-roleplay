<?php

// Controllers
use App\Http\Controllers\Companies;
use App\Http\Controllers\Debug;
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

    $name = 'companies';
    Route::prefix($name)->name($name . '.')->controller(Companies::class)->group(function() {

        // A.C.R.U.D.
        Route::GET('/', [Companies::class, 'all'])->name('all'); // Get all available Companies
        Route::POST('/', [Companies::class, 'create'])->name('create');  // Create a brand new Company
        Route::GET('/{id}', [Companies::class, 'read'])->name('read'); // Get info of an exising Company
        Route::PATCH('/{id}', [Companies::class, 'update'])->name('update'); // Update an existing Company
        Route::DELETE("/{id}", [Companies::class, 'delete'])->name('delete'); // Delete an existing Company

        // Relations
        Route::GET("/{id}/owner", [Companies::class, 'owner'])->name('owner'); // Get the Owner of that Company (the Director)
        Route::GET("/{id}/parent", [Companies::class, 'parent'])->name('parent'); // Get the Parent Company

        /* Employees */
        Route::prefix('{id}/employees')->name('employees.')->controller(Companies::class)->group(function() {
            Route::GET("/", 'employees')->name('all'); // Retrieve all Company Employees
            Route::POST("/", 'hireEmployee')->name('create'); // Hire Employee
            Route::GET("/{userId}", 'getEmployee')->name('read'); // Get an existing User Employee
            Route::PATCH("/{userId}", 'promoteEmployee')->name('update'); // Promote Employee
            Route::DELETE("/{userId}", 'fireEmployee')->name('delete'); // Fire Employee
        });

        /* Roles */
        Route::prefix('{id}/roles')->name('roles.')->group(function() {
            Route::GET("/", 'all');
            Route::POST("/", 'create');
            Route::POST("/{roleId}", 'read');
            Route::PATCH('/{roleId}', 'update');
            Route::DELETE("/{roleId}", 'delete');
        });      
                
    });

    //////////////////
    // Transactions //
    //////////////////
    $name = 'transactions';
    Route::prefix($name)->name($name . '.')->controller(Transactions::class)->group(function () {

        // A.C.R.U.D.
        Route::GET('/', 'all');
        Route::POST('/', 'create');
        Route::GET('/{id}', 'read');
        Route::PATCH('/{id}', 'update');
        Route::DELETE("/{id}", 'delete');

        // Relations
        Route::GET("/{id}/receiver", 'receiver');
        Route::GET("/{id}/sender", 'sender');
        Route::GET("/{id}/updater", 'updater');

    });

    //////////////
    // Debugger //
    //////////////

    Route::GET("/debug", [Debug::class, 'get']);

});