<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendEmail;
use Mail;

class EmailController extends Controller
{
    public function sendjob(Request $request){
        $homeUrl = url('/');
        $job_id = $request -> get('job_id');
        $job_titre = $request -> get('job_titre');
        $jobUrl = $homeUrl.'/'.'showjob/'.$job_id;

        $data = array(
            'your_name ' => $request -> get('your_name'),
            'your_email ' => $request -> get('your_email'),
            'destinataire ' => $request -> get('destinataire'),
            'friend_email ' => $request -> get('friend_email'),
            'jobUrl'  => $jobUrl,
        );

        return redirect() -> back () -> with('message','Vous venez de transferer une offre');
    }
}
