<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AgoraVideoController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\VideoChatController;
use App\Http\Controllers\EmployerProfileController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\CategorieController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\Demandeur;
use App\Http\Middleware\Recruteur;
use App\Http\Controllers\ChartJsController;
use App\Notifications\SendEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[JobController::class,'index'])->name('accueil');

//Verification Email
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(["verified"]);

//Profils Offres
Route::get("/showjob/{id}",[JobController::class,"showjob"])-> middleware('App\Http\Middleware\Authenticate');
Route::get("/job/create",[JobController::class,"createjob"]);
Route::post("/uploadpost",[JobController::class,"upload"]);
Route::get("/jobs/myjobs",[JobController::class,"seejob"]);
Route::get("/jobs/applyjob/{id}",[JobController::class,"applyjob"]);
Route::get("/jobs/applicants",[JobController::class,"applicantjob"]);
Route::get('/showcandidates',[JobController::class,'showcandidates']);
Route::get('/showretourcandidates',[JobController::class],'showretourcandidates');
Route::post('/selectprofile/{id}',[JobController::class,'selectprofile']);
Route::get("/deletejob",[JobController::class,"deletejob"])->name('job.delete');
Route::get("/editjob",[JobController::class,"editjob"]);
Route::get("/showalljobs",[JobController::class,"showalljobs"]);
Route::get("/jobs/searchjob",[JobController::class,"showalljobs"]);
Route::post('/applications/{id}',[JobController::class,"applyjob"]);
Route::get('/searchprofile',[JobController::class,'applicantjob']);
Route::get('/searchbaraccueil',[JobController::class,'index']);
Route::get('/cancelapplication',[JobController::class,'cancelapply']);

//Recherche d'offres avec VueJS
Route::get('/jobs/search',[JobController::class,"searchjob"]);

//Save and Unsave
Route::post('/save/{id}',[FavoriteController::class,"savejob"]);
Route::post('/unsave/{id}',[FavoriteController::class,"unsavejob"]);


//Profils Compagnies
Route::get('/showcompany/{id}',[CompanyController::class,'index'] )->name('company.index');
Route::get('/company/create',[CompanyController::class,'showeditcompany'] );
Route::post('/editcompanyinfos',[CompanyController::class,'editcompany'] );
Route::get('/company/list',[CompanyController::class,'showcompanylist'] );
Route::get('/showdashboardrecruteur',[CompanyController::class,'showdashboard'] );
Route::post('/editcompanycover',[CompanyController::class,'editcover'] );
Route::post('/editcompanylogo',[CompanyController::class,'editlogo'] );
Route::post('/searchcompany',[CompanyController::class,'searchcompany'] );
Route::get('/company/showprofils',[CompanyController::class,'showallprofiles']);
Route::get('/contactprofile/{id}',[CompanyController::class,'contactprofile']);


//Profils Utilisateurs
Route::get('user/profile',[UserProfileController::class,'index'] );
Route::get('/user/showprofile/{id}',[UserProfileController::class,'showprofileforcompany'] );
Route::post('/editprofiledata',[UserProfileController::class,'editprofiledata'] );
Route::post('/editcoverletter',[UserProfileController::class,'editcoverletter'] );
Route::post('/editcv',[UserProfileController::class,'editcv'] );
Route::post('/edituseravatar',[UserProfileController::class,'edituseravatar'] );
Route::get("/showprofile/{id}",[UserProfileController::class,"showprofile"]);
Route::get('/showdashboard1',[UserProfileController::class,'showdashboard'] );


//Profils Recruteurs
Route::view('employer/profile','auth.emp-register')->name('employer.registration'); 
Route::post('/employerregister',[EmployerProfileController::class,'store'],['verify' => true]);

//Categories
Route::get('/showcategories',[CategorieController::class,'showcategories'])->name('categorie.show');
Route::get('/searchbaraccueil',[JobController::class,'index']);
Route::get('/jobcategory/{id}',[CategorieController::class,'index']);
Route::get('searchjobcategory',[CategorieController::class,'showjobcategory']);
Route::get('/showjobcategory/{$id}',[CategorieController::class,'showjobcategory']);
Route::get('/showallcategories',[CategorieController::class,'showall']);


//Pages Visiteurs
Route::get('/about',[VisitorController::class,'showabout']);
Route::get('/blog',[VisitorController::class,'showblog']) -> middleware('App\Http\Middleware\Authenticate');
Route::get('/contact',[VisitorController::class,'showcontact']);
Route::get('/carriere',[VisitorController::class,'showcarriere']);
Route::get('/policy',[VisitorController::class,'showpolicy']);
Route::get('/terms',[VisitorController::class,'showterms']);
Route::get('/help',[VisitorController::class,'showterms']);


//CV
Route::get('/cv/create',[UserProfileController::class,'createcv']);
Route::post('/uploadcvgeneraldata',[UserProfileController::class,'uploadcvgeneraldata']);
Route::post('/uploadcvcontactdata',[UserProfileController::class,'uploadcvcontactdata']);
Route::post('/uploadcveducationdata',[UserProfileController::class,'uploadcveducationdata']);
Route::post('/uploadcvexperiencedata',[UserProfileController::class,'uploadcvexperiencedata']);
Route::post('/uploadcvskilldata',[UserProfileController::class,'uploadcvskilldata']);

//Follow
Route::get('/followcompany/{id}',[FollowController::class,'follow']);
Route::get('/unfollowcompany/{id}',[FollowController::class,'unfollow']);

//Appel Video
Route::post('/pusher/auth',[HomeController::class,'authentication']);
Route::get('/calls/interview',[HomeController::class,'showcall']);

//Administrateur
Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin');

//Taches Admin
Route::get('/admin/showaddcategorie',[AdminController::class,'showaddcategorie']);
Route::get('/admin/showaddcompany',[AdminController::class,'showaddcompany']);
Route::post('/addcategorie',[AdminController::class,'uploadcategorie']);
Route::get('/showallcategorie',[AdminController::class,'showlist']);
Route::get('/deletecategorie/{id}',[AdminController::class,'deletecategorie']);
Route::get('/editcategorie',[AdminController::class,'editcategorie']);
Route::post('/uploadeditcategorie/{id}',[AdminController::class,'uploadeditcategorie']);
Route::get('/showlistcompany',[AdminController::class,'showlistcompany']);
Route::get('/deletecompany/{id}',[AdminController::class,'deletecompany']);
Route::get('/validatecompany/{id}',[AdminController::class,'validatecompany']);

//Configurations Demandeurs
Route::get('/admin/showusers',[AdminController::class,'showusers']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/admin/chart',[AdminController::class,'barchart']);


//Blog
Route::get('/blog/create',[CompanyController::class,'showcreatepost']);
Route::post('/uploadblogpost',[CompanyController::class,'uploadblogpost']);
Route::get('/admin/showposts',[AdminController::class,'showarticles']);
Route::get('/admin/deletepost/{id}',[AdminController::class],'deletepost');
Route::get('/admin/sendpost/{id}',[AdminController::class],'sendpost');
Route::get('/blog/readpost/{id}',[VisitorController::class,'readpost']);
Route::get('/blog/mypost',[CompanyController::class,'showmypost']);
Route::get('/blog/editpost/{id}',[CompanyController::class,'editblogpost']);

//APPELS VIDEO
Route::get('/video-chat', function () {
    // fetch all users apart from the authenticated user
    $users = User::where('id', '<>', Auth::id())->get();
    return view('Video.video-chat', ['users' => $users]);
});

// Endpoints to call or receive calls.
Route::post('/video/call-user',[ VideoChatController::class,'callUser'] );
Route::post('/video/accept-call', [VideoChatController::class,'acceptCall']);

//Video2
Route::group(['middleware' => ['auth']], function () {
    Route::get('/agora-chat', [AgoraVideoController::class,'index']);
    Route::post('/agora/token', [AgoraVideoController::class,'token']);
    Route::post('/agora/call-user', [AgoraVideoController::class,'callUser']);
});

//Newsletter
Route::post('newsletter',[NewsletterController::class,'store']);

//Transferer offre
Route::post('/sendjoboffer',[EmailController::class,'sendjob']);