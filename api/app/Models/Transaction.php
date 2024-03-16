<?php

namespace App\Models;

// Laravel
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Models
use App\Models\Company;
use App\Models\User;

// Libraries
use App\Http\Controllers\Entities;
use App\Enums\EntityType;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\UserResource;

class Transaction extends Model {
    
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'sender_type',
        'sender_id',
        'receiver_type',
        'receiver_id',
        'payment_method',
        'description',
        'amount',
        'created_at',
        'updated_at',
        'updated_by',
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
        'updated_at' => 'datetime'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [];

    public function getEntity(string $entityType, $entityId):UserResource|CompanyResource|array {
        return Entities::get($entityType, $entityId);
    }

    ///////////////
    // Relations //
    ///////////////

    public function receiver():UserResource|CompanyResource|array {
        return ($this->receiver_id) ? $this->getEntity($this->receiver_type, $this->receiver_id) : [];
    }

    public function sender():UserResource|CompanyResource|array {
        return ($this->sender_id) ? $this->getEntity($this->sender_type, $this->sender_id) : [];
    }

    public function updater():UserResource {
        return New UserResource(User::findOrFail($this->updated_by));
    }

}
