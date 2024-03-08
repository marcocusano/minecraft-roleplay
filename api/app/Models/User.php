<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'firstname',
        'lastname',
        'nickname',
        'email',
        'phone',
        'discord',
        'telegram',
        'password',
        'gender',
        'curriculum',
        'thirst',
        'balance',
        'created_at',
        'updated_at',
        'last_login_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'last_login_at' => 'datetime'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    ///////////////
    // Relations //
    ///////////////

    

    ////////////////////
    // Custom Methods //
    ////////////////////

    /**
     * @return string
     */
    public function defaultProfilePhotoUrl($size = 200) {
        return 'https://www.gravatar.com/avatar/' . md5($this->email);
    }

    /* Comment Gravatar and Uncomment here for UI Avatars Instead
    public function defaultProfilePhotoUrl() {
        return 'https://ui-avatars.com/api/' . implode('/', [

            //IMPORTANT: Do not change this order
            urlencode($this->firstname . " " . $this->lastname), // name
            200, // image size
            'EBF4FF', // background color
            '7F9CF5', // font color
        ]);
    }
    */


}
