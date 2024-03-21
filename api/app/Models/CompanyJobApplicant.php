<?php

namespace App\Models;

// Laravel
use Illuminate\Database\Eloquent\Model;

// Models


class CompanyJobApplicant extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'job_id',
        'created_at',
        'updated_at',
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

    public function company() { return $this->job->company; }

    public function job() { return $this->belongsTo(CompanyJob::class); }

    public function role() { return $this->job->role; }

}
