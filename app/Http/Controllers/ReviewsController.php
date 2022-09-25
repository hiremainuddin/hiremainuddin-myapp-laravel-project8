<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Reviews::paginate(5);
        return view('backend.allReviews',['reviews'=>$reviews]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createReview');
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
            'name'=>'string|required',
            'job'=>'string|required',
            'comment'=>'string|required|min:5'
        ]);

        Reviews::insert([
            'name'=> $request->name,
            'job'=> $request->job,
            'comment'=> $request->comment
        ]);

        return back()->with('success', 'Your review has been created successfully');
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
        $review = Reviews::findOrFail($id);
        return view('backend.updateReview',['review'=>$review]);
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
        $review = Reviews::findOrFail($id);
         $request->validate([
            'name'=>'string|required',
            'job'=>'string|required',
            'comment'=>'string|required|min:5'
        ]);

        $review->name = $request->name;
        $review->job = $request->job;
        $review->comment = $request->comment;
        $review->save();
        return back()->with('success', 'Your review has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return back()->with('success', 'Your review has been deleted successfully');

    }
}
