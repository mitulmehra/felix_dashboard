<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Passenger;

class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('videos');
    }
    public function create_video(Request $request)
    {        
        $data['video_requested'] = Passenger::where('traveler_id', \Auth::user()->id)->get();
        // dd($video_requested);
        return view('video_status', $data);
    }
   
}
