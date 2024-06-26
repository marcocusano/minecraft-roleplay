<?php

namespace App\Models;

// Laravel
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\Company;
use App\Models\CompanyRole;
use App\Models\CompanyJobApplicant;

class CompanyJob extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'role_id',
        'name',
        'description',
        'created_at',
        'updated_at',
        'expires_at',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'expires_at' => 'datetime'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [];

    ///////////////
    // Relations //
    ///////////////

    public function company() { return $this->belongsTo(Company::class); }

    public function role() { return $this->belongsTo(CompanyRole::class); }

    public function applicants() { return $this->hasMany(CompanyJobApplicant::class, 'job_id'); }    

}
