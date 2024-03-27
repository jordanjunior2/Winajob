<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Profil;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Services;

class CategorieController extends Controller
{
    public function showcategories(){

        $data = categorie::latest()->limit(6)->get();
        
        return view('Winajob-Autres.category',compact("data"));
    }

    public function showjobcategory($id){

        
        $name = categorie::find($id);
        
        $keyword = $request -> keyword;
        $location = $request -> location;
        $compagnie = $request -> compagnie;
        if($keyword||$location||$compagnie){
            $comp = job::where('titre','LIKE','%'.$keyword.'%')->where('categorie_id',$id)
            ->orWhere('ville',$location)->where('categorie_id',$id)
            ->orWhere('categorie_id',$categorie)->where('categorie_id',$id)
            ->count();
            $jobs = job::where('titre','LIKE','%'.$keyword.'%')->where('categorie_id',$id)
            ->orWhere('ville',$location)->where('categorie_id',$id)
            ->orWhere('categorie_id',$categorie)->where('categorie_id',$id)
            ->paginate(7);

            return view('category.jobcategory',compact('jobs','comp'));
        }
        else{
            $jobs = job::all() -> where('categorie_id',$id) -> paginate(7);
            $comp = job::all() -> where('categorie_id',$id) -> count();
            return view('job.jobcategory',compact('jobs','comp'));
        }
    }

    public function index(Request $request,$id){

        $name = categorie::find($id);
        
        $keyword = $request -> keyword;
        $location = $request -> location;
        $compagnie = $request -> compagnie;
        if($keyword||$location||$compagnie){
            $comp = job::where('titre','LIKE','%'.$keyword.'%')->where('categorie_id',$id)
            ->orWhere('ville',$location)->where('categorie_id',$id)
            ->orWhere('categorie_id',$categorie)->where('categorie_id',$id)
            ->count();
            $jobs = job::where('titre','LIKE','%'.$keyword.'%')->where('categorie_id',$id)
            ->orWhere('ville',$location)->where('categorie_id',$id)
            ->orWhere('categorie_id',$categorie)->where('categorie_id',$id)
            ->paginate(7);

            return view('category.jobcategory',compact('jobs','comp'));
        }
        else{
            $jobs = job::where('categorie_id',$id) -> paginate(7);
            $comp = job::where('categorie_id',$id) -> count();
            return view('job.jobcategory',compact('jobs','comp','name'));
        }
    }

    public function showall(){

        $job = job::count();
        $categorie = categorie::paginate(7);
        return view('categories.all',compact('categorie','job'));
    }
}
