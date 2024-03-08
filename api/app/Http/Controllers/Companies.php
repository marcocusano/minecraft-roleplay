<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

// Models
use App\Models\Company;
use App\Models\User;
// Requests
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\CompanyOwnerRequest;
// Resources
use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;

class Companies extends Controller {

    ////////////////
    // A.C.R.U.D. //
    ////////////////

    public function all() {
        return CompanyResource::collection(Company::all());
    }

    public function create(CompanyRequest $request) {
        $data = $request->validated();
        $company = new Company();
        $company->fill($data);
        $company->save();
        return new CompanyResource($company);
    }

    public function read($id) {
        $company = Company::findOrFail($id);
        return new CompanyResource($company);
    }

    public function update($id, CompanyRequest $request) {
        $company = Company::findOrFail($id);
        $data = $request->validated();
        $company->update($data);
        return new CompanyResource($company);
    }

    public function delete($id) {
        $company = Company::findOrFail($id);
        $company->delete();
        return response()->json([], 204);
    }

    ///////////////
    // Relations //
    ///////////////

    public function employees($id) {
        $company = Company::findOrFail($id);
        return UserResource::collection($company->employees);
    }

    public function owner($id) {
        $company = Company::findOrFail($id);
        return new UserResource($company->owner);
    }

    public function parent($id) {
        $company = Company::findOrFail($id);
        return new CompanyResource($company);
    }

    public function updater($id) {
        $company = Company::findOrFail($id);
        return new UserResource($company->updater);
    }

    ///////////////
    // Employees //
    ///////////////

    public function fireEmployee($id, $userId) {
        $company = Company::findOrFail($id);
    }

    public function hireEmployee($id, $userId) {
        $company = Company::findOrFail($id);
        $user = User::findOrFail($userId);
    }

    public function setOwner($id, CompanyOwnerRequest $request) {
        $data = $request->validated();
        $company = Company::findOrFail($id);
        $company->update($data);
        return new CompanyResource($company);
    }

}