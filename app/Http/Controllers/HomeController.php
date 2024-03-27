<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Http\Requests\JobPostRequest;
use \Pusher\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs=Auth::user()->favorites;
        return view('home',compact('jobs'));
    }

    public function authentication(Request $request){
        $socketId = $request -> socket_id;
        $channelName = $request -> channel_name;

        $pusher = new Pusher('751ae23c0eac0084d3b9','7462368dedbd8afc8251','1461469',[
            'cluster' => 'ap2',
            'encrypted' => true
        ]);

        $presence_data = ['name' => auth()->user()->name];
        $key = $pusher -> presence_auth($channelName,$socketId,auth()->id(),$presence_data);

        return response($key);
    }

    public function showcall(){

        return view('Video.Interview');
    }

    
}
