<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\User;
use App\Models\Categorie;

class articles extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function company(){
        return $this->belongsTo(Company::class,'company_id');
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
