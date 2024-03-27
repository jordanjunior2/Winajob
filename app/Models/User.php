<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profil;
use App\Models\Company;
use App\Models\Avis;
use App\Models\Articles;
use App\Models\AuditTrail;

class User extends Authenticatable implements MustVerifyEmail
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
        'user_type',
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

    public function profil(){
        return $this -> hasOne(Profil::class);
    }
    

    public function company(){
        return $this -> hasOne(Company::class);
    }

    public function favorites(){
        return $this ->belongsToMany(Job::class,'favourites','user_id','job_id')->withTimestamps();
    }

    public function jobs(){

        return $this -> hasMany(Job::class);
    }

    public function user_company_followers(){
        return $this ->belongsToMany(User::class,'user_company_followers','user_id','company_id')->withTimestamps();
    }

    public function audit_trail(){
        return $this -> hasMany(AuditTrail::class);
    }

    public function articles(){
        return $this->hasMany('App\Models\Articles');
    }
}
