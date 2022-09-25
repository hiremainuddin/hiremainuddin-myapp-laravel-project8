<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Galleries;
use App\Models\Project;
use App\Models\User;
use App\Models\Clients;
use App\Models\Blog;
use Response;
class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend/index');
    }

    public function detail($id) 
    {
        $blog = Blog::findOrFail($id);
        // dd($blog);
        return view('frontend.blog-detail',compact('blog'));
    }
    public function download()
    {
        $file = "frontend/download/hiremainuddin.pdf";
        return Response::download($file);
    }
    public function contact()
    {
        return view('frontend/contact');
    }


}
