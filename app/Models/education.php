<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profil;

class education extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function profil(){

        return $this -> belongsToMany(Profil::class);
    }

    public function profil_education(){
        return $this ->belongsToMany(Profil::class,'profil_education','education_id','profil_id')->withTimestamps();
    }
}
