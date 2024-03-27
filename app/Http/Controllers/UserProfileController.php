<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\User;
use App\Models\Experiences;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Services;
use App\Http\Middleware\Demandeur;

class UserProfileController extends Controller
{
    
    public function index(){

        $data = profil::where('user_id',auth()->user()->id);
        return view('profile.edit',compact('data'));
    }

    public function editprofiledata(Request $request){

        $adresse = $request ->input('adresse');
        $phone_number = $request ->input('phone_number');
        $societe_actu = $request ->input('societe_actu');
        $portfolio = $request ->input('portfolio');
        $fonction = $request ->input('fonction');
        $description = $request ->input('description');
        $bio = $request ->input('bio');
        Profil::where('user_id',auth()->user()->id)->update([
            'adresse'=>$adresse,
            'phone_number'=>$phone_number,
            'societe_actu'=>$societe_actu,
            'portfolio'=>$portfolio,
            'fonction'=>$fonction,
            'description'=>$description,
            'bio'=>$bio
        ]);
        

        return redirect()->back()->with('status','Votre Profil a été mis à jour avec success');

    }

    public function editcoverletter(Request $request,$id){
        $this->validate($request, [
            'cover_letter'=> 'required|mimes:pdf,doc,docx|max:20000',
            
        ]);

        $data = profil::findOrFail($id);
        $cover_letter = $request -> file('cover_letter')->store('public/files/cover_letters');
        $data -> cover_letter =$cover_letter;
        return redirect()->back()->with('message','Votre Lettre de Motivation a été mise à jour avec success');

    }

    public function editcv(Request $request,$id){
        $this->validate($request, [
            'cv'=> 'required|mimes:pdf,doc,docx|max:20000',
            
        ]);


        $data = profil::findOrFail($id);
        $cv = $request -> file('cv')->store('public/files/cv');
        $data -> cv =$cv;
        return redirect()->back()->with('message','Votre CV a été mis à jour avec success');

    }

    public function edituseravatar(Request $request){
        $this->validate($request, [
            'avatar'=> 'required|mimes:jpg,jpeg,png|max:1024',
            
        ]);

        if($request -> hasFile('avatar')){
            $file = $request->file('avatar');
            $avatar = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$avatar;
            $file -> move('public/files/avatars',$fileName);
            profil::where('user_id',auth()->user()->id)->update([
                'avatar'=>$fileName
            ]);
            return redirect()->back()->with('message','Votre Avatar a été mis à jour avec success');
        }
        else
        {
            return redirect()->back()->with('message','Aucune modification effectuée');
        }

        
    }


    public function showprofileforcompany($id){

        $profile = profil::find($id);
        $user=user::find($id);
        $experiences = experiences:: where('profil_id',$profile);
        $education = education::where('profil_id',$profile);
        $skills = skill::where('profil_id',$profile);
        return view('profile.index',compact("profile","experiences","user","education","skills"));
    }

    public function createcv(){

        return view('CV.create');
    }

    public function uploadcvgeneraldata(Request $request){

        $id = auth()->user() -> id;
        $date_naissance = $request -> date_naissance;
        $genre = $request -> genre;
        $situation = $request -> situation;
        profil::where('user_id',$id)->update([
            'date_naissance'=>$date_naissance,
            'genre'=>$genre,
            'situation'=>$situation,
        ]);

        return redirect() -> back() -> with ('message','données enregistrées');
    }

    public function uploadcvcontactdata(Request $request,$id){


        $ville = $request -> ville;
        $pays = $request -> pays;
        $phone_number = $request -> phone_number;
        $portfolio = $request -> portfolio;
        $adresse = $request -> adresse;
        Profil::where('user_id',auth()->user()->id)->update([
            'pays'=>$pays,
            'phone_number'=>$phone_number,
            'portfolio'=>$portfolio,
            'adresse'=>$adresse
        ]);

        return redirect() -> back() -> with ('message','données enregistrées');

    }

    public function uploadcveducationdata(Request $request){

        $profil_id = profil::where('user_id',auth() -> user() -> id) ->get();
        $data = new education;
        $data -> profil_id = $profil_id;
        $data -> diplome = $request -> diplome;
        $data -> etabissement = $request -> etablissement;
        $data -> certification = $request -> certification;
        $data -> filiere = $request -> filiere;
        $data -> debut = $request -> debut;
        $data -> fin = $request -> fin;
        $data -> description_etude = $request -> description_etude;
        $data -> save();

    return redirect() -> back() ->with('message','Ajout effectué');
    }

    public function uploadcvexperiencedata(Request $request){

        
        $profilid = profil::where('user_id',auth() -> user() -> id) ->get();
        $data = new experiences;
        $data -> profil_id = $profilid;
        $data -> fonction = $request -> fonction;
        $data -> adresse_societe = $request -> adresse_societe;
        $data -> nom_societe = $request -> nom_societe;
        $data -> started_at = $request -> started_at;
        $data -> finished_at = $request -> finished_at;
        $data -> taches = $request -> taches;
        $data -> save();
    
    return redirect() -> back() ->with('message','Ajout effectué');
}

    public function uploadcvskilldata(Request $request){

        $profilid = profil::where('user_id',auth() -> user() -> id) ->get();
        $data = new skill;
        $data -> profil_id = $profilid;
        $data -> nom_competence = $request -> nom_competence;
        $data -> degre = $request -> degre;
        //si erreur d'insertion supprimez le $key
        $data -> save();

    return redirect() -> back() ->with('message','Ajout effectué');
    }

    public function showdashboard(){
        $job = user::with('jobs') ->paginate(10);
        $count = user::with('jobs')->where('id',auth() -> user() -> id) ->count();
        return view('seeker.mydash',compact('job','count'));
    }

}
