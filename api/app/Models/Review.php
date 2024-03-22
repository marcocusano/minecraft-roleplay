<?php

namespace App\Models;

// Laravel
use Illuminate\Database\Eloquent\Model;

// Libraries
use App\Http\Controllers\Entities;

// Resources
use App\Http\Resources\UserResource;
use App\Http\Resources\CompanyResource;

class Review extends Model {
    
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

    public function getEntity(string $entityType, $entityId):UserResource|CompanyResource|array {
        return Entities::get($entityType, $entityId);
    }

    public function receiver():UserResource|CompanyResource|array {
        return ($this->receiver_id) ? $this->getEntity($this->receiver_type, $this->receiver_id) : [];
    }

    public function sender():UserResource|CompanyResource|array {
        return ($this->sender_id) ? $this->getEntity($this->sender_type, $this->sender_id) : [];
    }

}
