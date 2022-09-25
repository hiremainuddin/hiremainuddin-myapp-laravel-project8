<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use File;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')->paginate(10);
        return view('backend.allProject',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.addProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {

          $this->validate($request,[
            'title'=>'required|string',
            'category'=>'required|string',
            'photo'=>'required|mimes:jpeg,jpg,png|max:1024',
            'description'=>'string|nullable',
            'link'=>'required|string',
            'status'=>'nullable|in:1,0',
           ]);

        }
         $image = "";
        if($file = $request->file('photo')){
            $image_name = md5(rand(1000, 10000));
            $image_ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'backend/projectImage/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
        }else{
            abort(404);
        }
        
          $project = Project::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'link' => $request->link,
            'photo' => $image,
            'status' => $request->status,
          ]);

          if ($project) {
              return redirect()->back()->with('success','Successfully project created.');
          }else{
              return redirect()->back()->with('error','Somthing is wrong.');
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('backend.editProject', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        if ($request->hasFile('photo')) {
             $this->validate($request,[
                'title'=>'required|string',
                'category'=>'required|string',
                'photo'=>'required|mimes:jpeg,jpg,png|max:1024',
                'description'=>'string|nullable',
                'link'=>'required|string',
                'status'=>'nullable|in:1,0'
               ]);
               
            unlink($project->photo);  
            $file = $request->file('photo');
            $image_name = md5(rand(1000, 10000));
            $image_ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'backend/projectImage/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
            
            // store in db
            $project->title = $request->title;
            $project->category = $request->category;
            $project->photo = $image;
            $project->description = $request->description;
            $project->link = $request->link;
            $project->status = $request->status;
            $project->save();
               
        }else{
            $this->validate($request,[
                'title'=>'required|string',
                'description'=>'string|nullable',
                'link'=>'required|string',
                'status'=>'nullable|in:1,0'
               ]);
               
              $project->title = $request->title;
              $project->category = $request->category;
              $project->description = $request->description;
              $project->link = $request->link;
              $project->status = $request->status;
              $project->save();
        }
         return redirect()->back()->with('success', 'Successfully updated');
          

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $project = Project::findOrFail($id);
      if ($project) 
      {
        unlink($project->photo);
        $project->delete();
        return redirect()->back()->with('success', 'Successfully deleted');
      }else
      {
        return Response::json(['error' => 'Not Found'], 404);
      }
    }
}
