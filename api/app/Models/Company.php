<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\User;
use App\Models\CompanyRole;
use App\Models\CompanyEmployee;

class Company extends Model {
    
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'owner_id',
        'luckperms',
        'permissions',
        'name',
        'description',
        'location',
        'icon',
        'is_public',
        'is_police',
        'is_hackerable',
        'is_master',
        'balance',
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
        'permissions' => 'json',
        'location' => 'json',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
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

    public function employees() { return $this->hasMany(CompanyEmployee::class, 'company_id'); }
    public function jobs() { return $this->hasMany(CompanyJob::class, 'company_id'); }
    public function owner() { return $this->belongsTo(User::class, 'owner_id'); }
    public function parent() { return $this->belongsTo(Company::class, 'parent_id'); }
    public function roles() { return $this->hasMany(CompanyRole::class, 'company_id'); }

}
