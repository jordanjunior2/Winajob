<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Avis;
use App\Models\Services;
use App\Models\Articles;

class company extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function job(){
        return $this->hasMany('App\Models\Job');
    }

    public function articles(){
        return $this->hasMany('App\Models\Articles');
    }

    public function services(){
        return $this->hasMany('App\Models\Services');
    }


    public function avis(){
        return $this -> hasOne(Avis::class);
    }

    public function user_company_followers(){
        return $this ->belongsToMany(User::class,'user_company_followers','company_id','user_id')->withTimestamps();
    }

    public function checkFollowed(){

        return \DB::table('user_company_followers')->where('user_id',auth()->user()->id)
        ->where('company_id',$this->id)->exists();
    }

    public function users(){
        return $this ->belongsToMany(Profil::class)->withTimestamps();
    }
}

