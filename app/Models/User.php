<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Accountdetail;
use App\Models\withdraw;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
        'city',
        'address',
        'phone',
        'trx_id',
        'senderno',
        'current_balance',
        'points',
        'invite_id',
        'backend_wallet',
        'gender',
        'role',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function accountdetail()
    {
        return $this->hasOne(Accountdetail::class);
        
    }

    public function withdraw()
    {
        return $this->hasMany(withdraw::class);
        
    }
    public function invite()
    {
        return $this->hasMany(User::class,'invite_id');
        
    }
    public function inviter()
    {
        return $this->belongsTo(User::class,'invite_id');
        
    }
    public function level()
    {
        return $this->belongsTo(Level::class,'level_id');
        
    }
  
}
