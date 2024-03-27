<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profil;

class Reseaux extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function profil(){

        return $this -> belongsTo(Profil::class);
    }
}
