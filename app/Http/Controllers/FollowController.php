<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Http\Requests\JobPostRequest;

class FollowController extends Controller
{
    public function followcompany($id){
        $jobid = Company::find($id);
        $jobid -> user_company_followers() -> attach(auth()->user()->id);
        return redirect() -> back()  ->with('message','Vous venez de vous abonnez à cette page') ;
    }

    public function unfollowcompany($id){
        $jobid = Company::find($id);
        $jobid -> user_company_followers() -> detach(auth()->user()->id);
        return redirect() -> back() ;
    }
}
