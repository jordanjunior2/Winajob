<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Http\Requests\JobPostRequest;

class FavoriteController extends Controller
{
    public function savejob($id){
        $jobid = Job::find($id);
        $jobid -> favorites() -> attach(auth()->user()->id);
        return redirect() -> back() ;
    }

    public function unsavejob($id){
        $jobid = Job::find($id);
        $jobid -> favorites() -> detach(auth()->user()->id);
        return redirect() -> back() ;
    }
}
