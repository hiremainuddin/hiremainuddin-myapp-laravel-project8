<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required'
        ]);

        $image = "";
        if ($file = $request->file('img'))
        {
            $image_full_name = $request->file('img')->getClientOriginalName();
            $upload_path = 'backend/blog/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
        }else{
            return abort(404);
        }

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => $image,
        ]);

        return back()->with('success', 'Blog successfully created!');
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

        $blog= Blog::findOrFail($id);

    if ($file = $request->file('img'))
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ]);
            
            unlink($blog->img);
            $image_full_name = $request->file('img')->getClientOriginalName();
            $upload_path = 'backend/blog/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;

            // data add in database
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->img = $image;
            $blog->save();

            return back()->with('success', 'Blog successfully updated!');
        }else{
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);
            // data add in database
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->save();

            return back()->with('success', 'Blog successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blog = Blog::findOrFail($id);
      if ($blog) 
      {
        unlink($blog->img);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog Successfully deleted');
      }else
      {
        return Response::json(['error' => 'Not Found'], 404);
      }
    }
}
