<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Galleries;
use App\Models\Project;
use App\Models\Reviews;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
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
        return view('home');
    }
    public function dashboard()
    {
        $proj = Project::all()->count();
        $rev = Reviews::all()->count();
        $mess = Message::all()->count();
        $serv = Service::all()->count();
        return view('backend/index',compact('proj','rev','serv','mess'));
    }
    
}
