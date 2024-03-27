<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployerProfileController extends Controller
{
    public function store(){

        $user= User::create([
            'email' => request('email'),
            'user_type' => request('user_type'),
            'name'=>  request('cname'),
            'password' => Hash::make(request('password')),
        ]);
        Company::create([
            'user_id'=>$user->id,
            'slug' =>  request('cname'),
            'cname' =>  request('cname'),
            'email' => request('email'),
        ]);
        return redirect() -> to('login')->with('message','Votre Email doit etre vérifié');
    }
}
