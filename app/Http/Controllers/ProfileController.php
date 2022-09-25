<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.profile');
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
        // dd($request->image);
        $profile = User::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $this->validate($request,[
                'name' => 'string|required',
                'email' => 'email|required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'description' => 'string',
                'age' => 'required',
                'phone' => 'required',
                'address' => 'string|required'
                
            ]);
            
            // unlink($profile->image); 
            
            $file = $request->file('image');
            $image_name = md5(rand(1000, 10000));
            $image_ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'backend/images/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;


           
            $profile->email = $request->email;
            $profile->image = $image;
            $profile->description = $request->description;
            $profile->phone = $request->phone;
            $profile->age = $request->age;
            $profile->address = $request->address;

            
            $profile->save();
            return redirect()->back()->with('success', 'Successfully updated');

        }else{

            $this->validate($request,[   
                'name' => 'string|required',
                'email' => 'email|required',
                'age' => 'required',
                'phone' => 'required',
                'address' => 'string|required',
                'description' => 'string'
            ]);
            
            $profile->name = $request->name;
            $profile->email = $request->email;
            $profile->description = $request->description;
            $profile->phone = $request->phone;
            $profile->age = $request->age;
            $profile->address = $request->address;

            $profile->save();
            return redirect()->back()->with('success', 'Successfully updated');

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
        //
    }
}
