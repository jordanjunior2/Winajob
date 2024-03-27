<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Articles;
use App\Models\Company;

class AdminController extends Controller
{
    public function index(){

        $month = ['janv','Fev','Mar','Avr','Mai','Juin','Juil','Aout','Sep','Oct','Nov','Dec'];

        $user = [];
        foreach ($month as $key => $value) {
            $user[] = \DB::table('job_user')-> where(\DB::raw("DATE_FORMAT(created_at, '%M')"),$value)->count();
        }

        $count = company::count();
        $count2 = user::where('user_type','!=','Admin')->count();
        $data = Company::withCount('job')->orderBy('job_count')->take(5)->get();

        return view ('Admin.dashboard',compact('data','count','count2'))->with('month',json_encode($month,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }

    public function barchart(){

        $users = User::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $months = User::select(\DB::raw("Month(created_at) as month"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){

            $data[$month] = $users[$index];
        }

        return view ('Admin.chart',compact('datas'));
    }

    public function showaddcategorie(){

        return view('Admin.Categories.Add');
    }

    public function uploadcategorie(Request $request){
        $this->validate($request, [
            'name'=> 'required|min:5',
        ]);

        $user = Auth() -> user();

        $data = new Categorie;
        $data -> name = $request -> name;
            $file = $request->file('icone');
            $icone = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$icone;
            $file -> move('public/files/categories/icones',$fileName);
            $data -> icone = $fileName;
        $data -> save();
        return redirect() -> back() -> with('message','Nouvelle Catégorie Ajoutée avec Succès');
    }

    public function showlist(){

        $cat = categorie::paginate(10);
        return view('Admin.Categories.Show2',compact('cat'));
    }

    public function deletecategorie($id){

        Categorie::where('id',$id) -> delete();
        return redirect() -> back() -> with('message','Catégorie supprimée');
    }

    public function editcategorie($id){

        $data = categorie::find($id);
        return view('Admin.Categories.Edit',compact('data'));
    }

    public function validatecompany($id){

        Company::where('id',$id) -> update([
            "certification" => "ok"
        ]);
        return redirect()->back()->with('message','Entreprise verifiée avec succes');
    }

    public function uploadeditcategorie(Request $request,$id){
        
            $file = $request->file('icone');
            $icone = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$icone;
            $file -> move('public/files/categories/icones',$fileName);
            $data = categorie::find($id);
            $data -> name = $request -> name;
            $data -> icone = $fileName;
            $data -> update();
        return redirect() -> back() -> with('message','Nouvelle Catégorie Mise à Jour avec Succès');
    }

    public function showlistcompany(){

        $company =company::paginate(10);
        return view('Admin.Compagnies.Show',compact('company'));
    }

    public function deletecompany($id){

        $data = company::find($id);
        $data -> delete();
        return redirect() -> back() -> with('message','Compagnie supprimée');
    }

    public function showusers(){

        $data = user::where('user_type','Demandeur') -> paginate(10);
        return view('Admin.Demandeurs.Show',compact('data'));
    }

    public function deleteuser($id){

        $data = user::find($id);
        $data -> delete();
        return redirect() -> back() -> with('message','Utlisateur supprimé');
    }

    public function showarticles(){

        $data = articles::where('statut','non validé') -> paginate(10);
        return view ('Admin.Articles.Show',compact('data'));
    }

    public function deletepost($id){

        $data = articles::find($id);
        $data -> delete();
        return redirect() -> back() -> with('message','Artcle supprimé');
    }

    public function sendpost($id){

        $data = articles::find($id);
        $data -> statut = 'validé';
        return redirect() -> back() -> with('message','Artcle validé');
    }

    public function showaddcompany(){

        return view('Admin.Compagnies.Add');
    }


    
}
