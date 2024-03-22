<?php

namespace App\Http\Controllers;

// Laravel
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
// Models
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\CompanyJob;
use App\Models\CompanyJobApplicant;
use App\Models\CompanyRole;
// Resources
use App\Http\Resources\UserResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyEmployeeResource;
use App\Http\Resources\CompanyJobResource;
use App\Http\Resources\CompanyJobApplicantResource;
use App\Http\Resources\CompanyRoleResource;

class Companies extends Controller {

    ////////////////
    // A.C.R.U.D. //
    ////////////////

    public function all() {
        return CompanyResource::collection(Company::all());
    }

    public function create(\App\Http\Requests\Companies\CreateRequest $request) {
        $data = $request->validated();
        $company = Company::create($data);
        return new CompanyResource($company);
    }

    public function read($id) {
        $company = Company::findOrFail($id);
        return new CompanyResource($company);
    }

    public function update($id, \App\Http\Requests\Companies\CreateRequest $request) {
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
        return CompanyEmployeeResource::collection($company->employees);
    }

    public function jobs($id) {
        $company = Company::findOrFail($id);
        return CompanyJobResource::collection($company->jobs()->paginate(env('APP_PAGINATE')));
    }

    public function owner($id) {
        $company = Company::findOrFail($id);
        return new UserResource($company->owner);
    }

    public function parent($id) {
        $company = Company::findOrFail($id);
        return new CompanyResource($company);
    }

    public function roles($id) {
        $company = Company::findOrFail($id);
        return CompanyRoleResource::collection($company->roles);
    }

    public function updater($id) {
        $company = Company::findOrFail($id);
        return new UserResource($company->updater);
    }

    ///////////////
    // Employees //
    ///////////////

    public function fireEmployee($id, $userId, \App\Http\Requests\Companies\Employees\DeleteRequest $request) {
        $data = $request->validated();
        $company = Company::findOrFail($id);
        $employee = CompanyEmployee::where('user_id', $userId)->firstOrFail();
        if ($employee->company_id !== $company->id) { return response([], 403); }
        DB::table('company_employees')->where('user_id', $userId)->delete();
        // TODO: Add a review if sent
        return New CompanyEmployeeResource($employee);
    }

    public function hireEmployee($id, \App\Http\Requests\Companies\Employees\CreateRequest $request) {
        $data = $request->validated();
        $company = Company::findOrFail($id);
        $data['company_id'] = $company->id;
        $employee = CompanyEmployee::create($data);
        return new CompanyEmployeeResource($employee);
    }

    public function setOwner($id, \App\Http\Requests\Companies\OwnerRequest $request) {
        $data = $request->validated();
        $company = Company::findOrFail($id);
        $company->update($data);
        return new CompanyResource($company);
    }

    //////////
    // Jobs //
    //////////

    public function allJobs() { return CompanyJobResource::collection(CompanyJob::all()); }

    public function getJob($id) { return New CompanyJobResource(CompanyJob::findOrFail($id)); }

    public function jobApplicants($id, $jobId) {
        $companyJob = CompanyJob::where('id', $jobId)->where('company_id', $id)->firstOrFail();
        return CompanyJobApplicantResource::collection($companyJob->applicants);
    }

    public function updateJobApplicant($id, $jobId, $userId, \App\Http\Requests\Companies\Jobs\Applicants\UpdateRequest $request) {
        $data = $request->validated();
        CompanyJob::where('id', $jobId)->where('company_id', $id)->firstOrFail();
        $jobApplicant = CompanyJobApplicant::where("job_id", $jobId)->where('user_id', $userId)->firstOrFail();
        $jobApplicant->update($data);
        return new CompanyJobApplicantResource($jobApplicant);
    }

    ///////////
    // Roles //
    ///////////

    public function getRole($id) { return new CompanyRoleResource(CompanyRole::findOrFail($id)); }

}