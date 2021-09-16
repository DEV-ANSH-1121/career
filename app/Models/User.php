<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'userID';

    public $timestamps = false;

    protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'vemail',
        'mobile',
        'mobileo',
        'vmobile',
        'passcode',
        'usertype',
        'country',
        'state',
        'district',
        'pincode',
        'address',
        'gender',
        'dob',
        'resume',
        'pic',
        'active',
        'deactive',
        'source',
        'referby',
        'beneficiary',
        'advisor',
        'euser',
        'loginIP',
        'signed',
        'edate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'passcode',
    ];

    public function routeNotificationForSns($notification)
    {
        return $this->mobile;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->passcode;
    }
}
