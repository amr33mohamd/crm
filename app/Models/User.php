<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];
    public function setPasswordAttribute($value) {
      $this->attributes['password'] = empty($value)
    ? $this->password
    : Hash::make($value);



    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //invited by
    public function invited_by()
    {
       return $this->hasOne(User::class,'invited_by','id');
     }
     public function followers()
     {
        return $this->hasMany(User::class,'invited_by','id');
      }
      public function leads()
      {
         return $this->hasMany(leads::class,'user_id','id');
       }
       public function accounts()
       {
          return $this->hasMany(accounts::class,'user_id','id');
        }

}
