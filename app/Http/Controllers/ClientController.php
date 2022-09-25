<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use DB;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_data = Clients::paginate(8);
        return view("backend/client", compact('client_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ($request->hasFile('logo')) {
          $this->validate($request,[
            'company'=>'required|string',
            'logo'=>'required|image|mimes:jpeg,png,jpg',
           ]);
           
        $image = "";
        if ($file = $request->file('logo'))
        {
            $image_name = md5(rand(1000, 10000));
            $image_ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$image_ext;
            $upload_path = 'backend/images/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image = $image_url;
        }else{
            return abort(404);
        }
          
          $client = Clients::create([
            'company' => $request->company,
            'logo' => $image,
          ]);

          if ($client) {
              return redirect()->back()->with('success','Successfully client data created.');
          }else{
              return redirect()->back()->with('error','Somthing is wrong.');
          }

      }
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

        $client= Clients::findOrFail($id);

        if ($request->hasFile('logo')) {
          $this->validate($request,[
            'company'=>'required|string',
            'logo'=>'required|image|mimes:jpeg,png,jpg',
           ]);
           
           unlink($client->logo);

            $image = "";
            if ($file = $request->file('logo'))
            {
                $image_name = md5(rand(1000, 10000));
                $image_ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$image_ext;
                $upload_path = 'backend/gallery/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image = $image_url;
            }else{
                return abort(404);
            }

            $client->company = $request->company;
            $client->logo = $image;
            $client->save();


          }else{

            $this->validate($request,[
            'company'=>'required|string',
             ]);
            $client->company = $request->company;
            $client->save();

          }

          if ($client) {
              return redirect()->back()->with('success','Successfully client data updated.');
          }else{
              return redirect()->back()->with('error','Somthing is wrong.');
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
      $client = Clients::where('id', $id)->first();
       $image = $client->logo;
       unlink($image);
       $client->delete();
       return back()->with('success', 'Your photo has been deleted successfully');
    }
}
