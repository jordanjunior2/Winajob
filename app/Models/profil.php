<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Experiences;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Reseaux;
use App\Models\Profil;

class profil extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function use(){
        return $this -> belongsTo(User::class,'user_id');
    }

    public function experience(){

        return $this -> hasMany(Experiences::class);
    }

    public function education(){

        return $this -> hasMany(Education::class);
    }

    public function skill(){

        return $this -> hasMany(Skill::class);
    }

    public function reseaux(){

        return $this -> hasMany(Reseaux::class);
    }

    public function profil_experience(){
        return $this ->belongsToMany(Experiences::class,'profil_experience','profil_id','experiences_id')->withTimestamps();
    }

    public function profil_education(){
        return $this ->belongsToMany(Profil::class,'profil_education','profil_id','education_id')->withTimestamps();
    }

    public function profil_skill(){
        return $this ->belongsToMany(Profil::class,'profil_skill','profil_id','skill_id')->withTimestamps();
    }
   
    public function users(){
        return $this ->belongsToMany(Company::class)->withTimestamps();
    }
}
