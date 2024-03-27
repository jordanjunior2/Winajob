<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Profil;
use App\Models\Company;

class job extends Model
{
    
    protected $guarded=[];
    protected $fillable = [];
    use HasFactory;
    public function getRouteKeyName(){

        return 'slug';
    }
    public function company(){
        return $this->belongsTo(Company::class,'company_id');
    }

    public function profil(){
        return $this->hasOne(Profil::class);
    }

    public function users(){
        return $this ->belongsToMany(User::class)->withTimestamps();
    }


    public function checkApplication(){

        return \DB::table('job_user')->where('user_id',auth()->user()->id)
        ->where('job_id',$this->id)->exists();
    }

    public function favorites(){
        return $this ->belongsToMany(Job::class,'favourites','job_id','user_id')->withTimestamps();
    }
    

    public function checkSaved(){

        return \DB::table('job_user')->where('user_id',auth()->user()->id)
        ->where('job_id',$this->id)->exists();
    }
}
