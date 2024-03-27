<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Models\Categorie;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Services;
use App\Models\Profil;
use App\Http\Requests\JobPostRequest;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Demandeur;
use App\Mail\ApplyMail;
use App\Mail\MailApplication;
use App\Mail\ContactMail;
use App\Mail\EntretienMail;
use Mail;

class JobController extends Controller
{
    public function index(){

        $jobs = Job::latest()->limit(5)->get();
        $companies = company::latest()->limit(10)->get();
        $clients = company::latest()->limit(4)->get();
        $categorie = categorie::with('job')->latest()->limit(6)->get();
        $company = company::latest()->limit(4)->get();;
        $full = job::where('type', '=', 'temps plein')->limit(5)->get();
        $part = job::where('type', '=', 'temps partiel')->limit(5)->get();
        $applicants = \DB::table('job_user') -> count();
        $comp = company::count();
        $job = categorie::count();
        $member = user::count();
        return view('welcome',compact('jobs','companies','clients','categorie','full','part','applicants','comp','job','member','company'));
        
        
    }

    public function showjob($id){
        $jobs = Job::latest()->limit(5)->get();
        $data = Job::find($id);
        $company = company::find($id);
        return view('job.show',compact("data",'jobs','company'));
    }

    public function createjob(){

        return view('job.create');
    }

    public function upload(Request $request){
        /*$this->validate($request, [
            'titre'=> 'required|min:20',
            'ville'=>'required',
            'salaire_min'=>'required|min:5',
            'salaire_max'=>'required|min:5',
        ]);*/
        $user_id = auth()->user()->id;
        $company = company::where('user_id',$user_id)->first();
        $company_id = $company->id;

        $data = new Job();
        $data -> user_id = $user_id;
        $data -> company_id = $company_id;
        $data -> titre = $request -> titre;
        $data -> ville = $request -> ville;
        $data -> pays = $request -> pays;
        $data -> slug = $request -> titre;
        $data -> salaire_min = $request -> salaire_min;
        $data -> salaire_max = $request -> salaire_max;
        $data -> genre = $request -> genre;
        $data -> education = $request -> education;
        $data -> annee_experience = $request -> annee_experience;
        $data -> roles = $request -> roles;
        $data -> description = $request -> description;
        $data -> categorie_id = $request -> categorie;
        $data -> position = $request -> position;
        $data -> adresse = $request -> adresse;
        $data -> type = $request -> type;
        $data -> statut = $request -> statut;
        $data -> responsabilites = $request -> responsabilites;
        $data -> last_date = $request -> last_date;
        
        $data -> save();

        return redirect()->back()->with('message','Offre Postée Avec Succès');


    }

    public function seejob(){

        $jobs = job::where('company_id',auth()->user()->company->id)->get();
        return view('job.myjobs',compact('jobs'));
    }

    public function applyjob(Request $request,$id){

        $job_id = job::find($id);
        $job_id -> users()->attach(Auth()->user()->id);
        $username = user::where('id',auth()->user()->id)->first();
        \DB::table('job_user')->where('user_id',auth()->user()->id)
        ->where('job_id',$job_id -> id)
        ->update([
            'status'=>'non retenu'
        ]);
        $email = '$username->email';
        $data = [
            'subject' => 'WinAJob Mail',
            'body' => 'Vous venez de candidater au poste de {{$job_id -> title}} via Notre plateforme'
        ];
        try{
            Mail::to(auth()->user()->email)->send(new MailApplication($data));
            return redirect() -> back()->with('message','Votre Candidature a été enregistrée avec succes,consultez votre boite electronique pour confirmation');
        }
        catch(Exception $e)
        {
            return redirect() -> back()->with('message','Désolé une erreur inattendue est survenue');

        }


        //Mail::to(auth()->user()->email)->send(new ApplyMail($envoi));
        
    }

    public function applicantjob(Request $request){

        $count = job::has('users')->where('user_id',auth()->user()->id)->count();
        $applicants = job::has('users')->where('user_id',auth()->user()->id)->paginate(10);
        $keyword = $request -> keyword;
        $genre = $request -> sexe;
        $competences = $request ->competence;
        if(($keyword && $genre)){
            $applicants = profil::where('experience','LIKE','%'.$keyword.'%')->where('genre',$sexe)
            ->orWhere('description','LIKE','%'.$keyword.'%')->where('genre',$sexe)
            ->orWhere('ville','LIKE','%'.$keyword.'%')->where('genre',$sexe);
            $count = profil::where('experience','LIKE','%'.$keyword.'%')->where('genre',$sexe)
            ->orWhere('description','LIKE','%'.$keyword.'%')->where('genre',$sexe)
            ->orWhere('ville','LIKE','%'.$keyword.'%')->where('genre',$sexe)
            ->count();
            return view('job.applicant',compact('applicants','count'));
        }
        elseif($keyword || $sexe || $competences) {
            $applicants = profil::where('experience','LIKE','%'.$keyword.'%')
            ->orWhere('ville','LIKE','%'.$keyword.'%')
            ->orWhere('description','LIKE','%'.$keyword.'%')
            ->orWhere('genre',$sexe);
            $count = profil::where('experience','LIKE','%'.$keyword.'%')
            ->orWhere('ville','LIKE','%'.$keyword.'%')
            ->orWhere('description','LIKE','%'.$keyword.'%')
            ->orWhere('genre',$sexe)
            ->count();
            return view('job.applicant',compact('applicants','count'));
        }
        else{
            return view('job.applicant',compact('applicants','count'));
        }
        
    }

    public function showalljobs(Request $request){
       
        $keyword = $request -> keyword;
        $genre = $request -> genre;
        $salaire = $request -> salaire;
        $location = $request -> location;
        $categorie = $request -> categorie;
        if($keyword||$location||$categorie){
            $comp = job::where('titre','LIKE','%'.$keyword.'%')
            ->orWhere('ville','LIKE','%'.$location.'%')
            ->orWhere('categorie_id',$categorie)
            ->count();
            $jobs = job::where('titre','LIKE','%'.$keyword.'%')
            ->orWhere('ville','LIKE','%'.$location.'%')
            ->orWhere('categorie_id',$categorie)
            ->paginate(7);

            return view('job.alljobs',compact('jobs','comp'));
        }

        elseif($keyword && $location && $categorie){
            $jobs = job::where('titre','LIKE','%'.$keyword.'%')
            ->Where('ville','LIKE','%'.$location.'%')
            ->Where('categorie_id',$categorie)
            ->paginate(7);
            $comp = job::where('titre','LIKE','%'.$keyword.'%')
            ->where('ville','LIKE','%'.$location.'%')
            ->where('categorie_id',$categorie)
            ->count();

            return view('job.alljobs',compact('jobs','comp'));
        }

        elseif($genre || $salaire){
            $jobs = job::where('genre','LIKE','%'.$genre.'%')
            ->orWhereBetween('salaire_min',[0,25000])->whereBetween('salaire_max',[0,25000])
            ->paginate(7);
            $comp = job::where('genre','LIKE','%'.$genre.'%')
            ->orWhereBetween('salaire_min',[0,25000])->whereBetween('salaire_max',[0,25000])
            ->count();
            return view('job.alljobs',compact('jobs','comp'));
        }
        elseif($genre && $salaire){
            $jobs = job::where('genre','LIKE','%'.$genre.'%')
            ->whereBetween('salaire_min',[0,25000])->whereBetween('salaire_max',[0,25000])
            ->paginate(7);
            $comp = job::where('genre','LIKE','%'.$genre.'%')
            ->whereBetween('salaire_min',[0,25000])->whereBetween('salaire_max',[0,25000])
            ->count();
            return view('job.alljobs',compact('jobs','comp'));
        }
        else{
            $comp = job::count();
            $users = user::all();
            $jobs = job::paginate(7);
        return view('job.alljobs',compact('jobs','comp','users'));
        }
    }

    public function searchjob(Request $request){

        $keyword = $request -> get('keyword');
        $users = job::where('titre','LIKE','%'.$keyword.'%')
        ->orWhere('position','LIKE','%'.$keyword.'%')
        ->limit(5)->get();

        return response()->json($users);
    }

    public function deletejob($id){

        $data = job::find($id);
        $data -> delete();

        return response()->json(['status'=>'200']);
    }

    public function editjob(Request $request,$id){

        $data=job::find($id);
        return view('job.edit');
    }

    public function showcandidates(){

        $count = job::has('users')->where('user_id',auth()->user()->id)->count();
        $company = company::where('user_id',auth()->user()->id);
        $applicants = job::has('users')->where('user_id',auth()->user()->id)
        ->paginate(10);

        return view('job.candidates',compact('applicants','count'));
    }


    public function selectprofile(Request $request,$id){

        $job_id = job::find($id);
        $profil_id -> profil::find($id);
        \DB::table('job_user')->where('user_id',$id)
        ->where('job_id',$job_id -> id)
        ->update([
            'status'=>'retenu'
        ]);
        $poste = '$job_id -> titre';
        $date = $request->input('date_entretien');

        $data = [
            'subject' => 'WinAJob Mail',
            'body' => 'Vous venez d\'etre selectionner pour le poste de {{$job_id -> title}} via Notre plateforme,un entretien est programmé au {{$date}}'
        ];
        try{
            Mail::to(auth()->user()->email)->send(new MailApplication($data));
            return redirect() -> back() -> with('message','Profil selectionné avec succès');
        }
        catch(Exception $e)
        {
            return redirect() -> back()->with('message','Désolé une erreur inattendue est survenue');

        }
        
    }

    public function myapplications(){

        $count = User::has('job')->where('id',auth()->user()->id)->count();
        $applicants = User::has('job')->where('id',auth()->user()->id)->paginate(10);

        return view('Accueil.Seeker',compact('count','applicants'));
    }

    public function cancelapply($id){

        $job_id = Job::find($id);
        $job_id -> users()->detach(auth()->user()->id);

        return redirect()->back()->with('message','Votre candidature a été retirée avec succès');
    }
    
}
