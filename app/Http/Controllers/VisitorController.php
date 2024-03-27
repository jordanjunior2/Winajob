<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Temoignages;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Avis;
use App\Models\Services;

class VisitorController extends Controller
{
    public function showabout(){

        $data = job::count();
        $avis =avis::has('users')->latest()->limit(1)->get();
        $clients = company::paginate(4);
        $comp = company::count();
        $applicants = \DB::table('job_user') -> count();
        return view('About.about',compact('data','comp','applicants','avis','clients'));
    }

    public function showblog(){

        $data = articles::where('statut','validé') -> paginate(6);
        return view('Blog.blog',compact('data'));
    }

    public function showcontact(){

        return view('Contact.contact');
    }

    public function readpost($id){

        $data = articles::find($id);
        return view('Blog.Show',compact('data'));
    }
}
