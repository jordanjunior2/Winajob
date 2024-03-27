<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class categorie extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function job(){
        return $this->hasMany(Job::class);
    }
}
