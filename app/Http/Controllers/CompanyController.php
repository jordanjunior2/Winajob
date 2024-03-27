<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Profil;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Services;
use App\Models\Articles;
use App\Http\Middleware\Recruteur;
use App\Mail\MailApplication;
use App\Mail\ContactMail;
use Mail;
use App\Mail\EntretienMail;

class CompanyController extends Controller
{
   
    
    public function index($id){

        $data = company::find($id);
        $verified = user::find($id);
        $followers = \DB::table('user_company_followers') -> where('company_id',$data -> id) -> count();
        $services = services::all() -> where ('company_id',$data -> id);
        return view('company.index',compact("data","verified","followers","services"));
    }

    public function showeditcompany(){

        return view ('company.edit');
    }

    public function editcompany(Request $request){
        $this->validate($request, [
            'adresse'=> 'required',
            'website'=> 'min:20',
            'description'=> 'min:30',
            'slogan'=> 'min:30',
            'phone' => 'digits:9|regex:/(24,69,65,67,68)[0-9]{9}/',
        ]);

        $data=Company::findOrFail($id);
        $data -> adresse = $request ->adresse;
        $data -> website = $request ->website;
        $data -> slogan = $request ->slogan;
        $data -> phone = $request ->phone;
        $data -> description = $request ->description;
        $data -> save();

        return redirect()->back()->with('message','Le Profil de votre Entreprise a été mis à jour avec success');

    }

    public function editcover(Request $request,$id){
        $this->validate($request, [
            'cover_photo'=> 'required|mimes:jpg,jpeg,png|max:10000',
            
        ]);

        $data = company::findOrFail($id);
        if($request -> hasFile('cover_photo')){
            $file = $request->file('cover_photo');
            $cover_photo = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$cover_photo;
            $file -> move('public/files/cover_photos',$fileName);
            $data -> cover_photo = $fileName;
        }

        return redirect()->back()->with('message','Votre Photo de Couverture a été mise à jour avec success');
    }

    public function editlogo(Request $request){
        $this->validate($request, [
            'logo'=> 'required|mimes:jpg,jpeg,png|max:10000',
            
        ]);
        $user = auth() -> user() ->id;
       
        if($request -> hasFile('logo')){
            $file = $request->file('logo');
            $logo = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$logo;
            $file -> move('public/files/logos',$fileName);
            company::where('user_id',$user)->update([
                'logo'=>$fileName
            ]);
            return redirect()->back()->with('message','Votre Logo a été mis à jour avec success');
        }
        

        
    }

    public function showcompanylist(Request $request){
        
        $keyword = $request -> keyword;
        $location = $request -> location;
        if($keyword||$location){
            $data = company::where('cname','LIKE','%'.$keyword.'%')
            ->orWhere('adresse','LIKE','%'.$location.'%')
            ->paginate(10);

            return view('company.list',compact("datas"));
        }
        else{
            $datas = company::paginate(10);
            return view('company.list',compact("datas"));

        }
    }

    public function uploadblogpost(Request $request){
        $this->validate($request, [
            'image'=> 'required|mimes:jpg,jpeg,png|max:10000',
            'titre'=> 'required|min:30'
            
        ]);
        $data = new articles;
        $data -> categorie_id = $request -> categorie;
        $data -> titre_article = $request -> titre_article;
        $data -> description = $request ->description;
            $file = $request->file('image');
            $image = $file -> getClientOriginalExtension();
            $fileName = time().'.'.$image;
            $file -> move('public/files/Blog/Articles',$fileName);
            $data -> image = $fileName;
        $data -> statut = 'non validé';
            $data -> save();
            return redirect()->back()->with('message','Article publié avec success,Veuillez patienter sa validation par un des administrateurs.');
        
        
    }

    public function showcreatepost(){

        return view('Blog.Create');
    }

    public function showmypost(){

        $company = company::where('user_id',auth()->user()->id);
        $data = articles::where('user_id',auth()->user()->id)->paginate(8);
        return view('Blog.myposts',compact('data','company'));
    }

    public function showallprofiles(){
        $count = Profil::count();
        $applicants = Profil::with('use')-> paginate(6);
        return view ('job.prof',compact('applicants','count'));
    }

    public function contactprofile($id){
        $company = Company::where('user_id',auth()->user()->id)->first();
        $user = user::find($id);
        $data = [
            'subject' => 'WinAJob Contact Mail',
            'body' => 'Bonjour M./Mlle/Mme {{$user->name}}, suite à une étude de votre profil,nous,{{$company->cname}} aimerions entré en contact avec vous dans les plus bref delais.Consultez notre page pour entrer en contact avec nous'
        ];
        try{
            Mail::to($user->email)->send(new ContactMail($data));
            return redirect() -> back()->with('message','Utilisateur contacté avec succes.');
        }
        catch(Exception $e)
        {
            return redirect() -> back()->with('message','Désolé une erreur inattendue est survenue');

        }
    }

    public function showdashboard(){
        return view('Employer.dashboard');
    }
}


