<?php

namespace App\Models;

// Laravel
use Illuminate\Database\Eloquent\Model;

class CompanyRole extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_type',
        'sender_id',
        'receiver_type',
        'receiver_id',
        'review',
        'rate',
        'created_at',
        'updated_at',
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

    

}
