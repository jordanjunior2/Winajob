<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('newsletter')->with('success', 'Merci pour votre souscription');
        }
        return redirect('newsletter')->with('failure', 'Vous avez deja souscris ');
            
    }
}