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

define('Version', '/v1');

Route::middleware('auth:sanctum')->get(Version . "/me", function (Request $request) {
    return $request->user();
});

///////////////
// Companies //
///////////////

// A.C.R.U.D.
Route::GET(Version . '/companies', [Companies::class, 'all']); // Get all available Companies
Route::POST(Version . '/companies', [Companies::class, 'create']);  // Create a brand new Company
Route::GET(Version . '/companies/{id}', [Companies::class, 'read']); // Get info of an exising Company
Route::PATCH(Version . '/companies/{id}', [Companies::class, 'update']); // Update an existing Company
Route::DELETE(Version . "/companies/{id}", [Companies::class, 'delete']); // Delete an existing Company

// Relations
Route::GET(Version . "/companies/{id}/owner", [Companies::class, 'owner']); // Get the Owner of that Company (the Director)
Route::GET(Version . "/companies/{id}/parent", [Companies::class, 'parent']); // Get the Parent Company

// Actions

/* Employees */
Route::GET(Version . "/companies/{id}/employees", [Companies::class, 'employees']); // Retrieve all Company Employees
Route::POST(Version . "/companies/{id}/employees", [Companies::class, 'hireEmployee']); // Hire Employee
Route::GET(Version . "/companies/{id}/employees/{userId}", [Companies::class, 'getEmployee']); 
Route::DELETE(Version . "/companies/{id}/employees/{userId}", [Companies::class, 'fireEmployee']); // Fire Employee
Route::PATCH(Version . "/companies/{id}/employees/{userId}", [Companies::class, 'promoteEmployee']); // Promote Employee


/*
    Roles
    Can be used to define all Company roles.
    While hiring a new Employee, this one can inherit a default Role or specified role as created/defined.
    Roles can inherit a set of permissions as described by any feature.
    For example the Employess will be considered part of the roles like transactions management, as following:
    - employees.create = Hire new Employees,
    - employees.read = Read all existing Employees
    - employees.update = Promote or Demote an Existing Employee
    - employees.delete = Fire an existing Employee
    - transactions.create = Create a new receipt for the Company
    - transactions.read = Read all receipts of the Company
    To know more about "permission keys" please check the "../Docs/Permissions.md" file.
*/
Route::GET(Version . "/companies/{id}/roles", [Companies::class, 'roles']);
Route::POST(Version . "/companies/{id}/roles", [Companies::class, 'createRole']);
Route::POST(Version . "/companies/{id}/roles/{roleId}", [Companies::class, 'role']);
Route::PATCH(Version . '/companies/{id}/roles/{roleId}', [Companies::class, 'updateRole']);
Route::DELETE(Version . "/companies/{id}/roles/{roleId}", [Companies::class, 'deleteRole']);


//////////////////
// Transactions //
//////////////////

// A.C.R.U.D.
Route::GET(Version . '/transactions', [Transactions::class, 'all']);
Route::POST(Version . '/transactions', [Transactions::class, 'create']);
Route::GET(Version . '/transactions/{id}', [Transactions::class, 'read']);
Route::PATCH(Version . '/transactions/{id}', [Transactions::class, 'update']);
Route::DELETE(Version . "/transactions/{id}", [Transactions::class, 'delete']);

// Relations
Route::GET(Version . "/transactions/{id}/receiver", [Transactions::class, 'receiver']);
Route::GET(Version . "/transactions/{id}/sender", [Transactions::class, 'sender']);
Route::GET(Version . "/transactions/{id}/updater", [Transactions::class, 'updater']);

//////////////
// Debugger //
//////////////

Route::GET(Version . "/debug", [Debug::class, 'get']);