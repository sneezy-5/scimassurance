<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Services;
use Illuminate\Http\Request;

class ActualitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.actualite.actualites',compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actualite.actualite');
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
            'type'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',

        ]);
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
;            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image $path = 
            $request->file('image')->storeAs('public/image', $fileNameToStore);
               
            
            $data['image']=$fileNameToStore;
            } else {
                $fileNameToStore = 'noimage.jpg';
                $data['image']=$fileNameToStore;
                }

                    //dd($data);
        Actualite::create($data);
        return redirect()->route('actualites.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actualite = Actualite::find($id);
        return view('admin.actualite.show_service',compact('actualites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualite = Actualite::find($id);
        return view('admin.actualite.edit_actualite',compact('actualite'));
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
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
;            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. ''. time().'.'.$extension;
            // Upload Image $path = 
            $request->file('image')->storeAs('public/image', $fileNameToStore);
               
            
            $data['image']=$fileNameToStore;
            } else {
                $fileNameToStore = 'noimage.jpg';
                $data['image']=Actualite::find($id)->image;
                }

                   // dd($data);
        Actualite::find($id)->update($data);
        return redirect()->route('actualites.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Actualite::find($id)->delete();

        return redirect()->route('actualites.index');

    }
}
