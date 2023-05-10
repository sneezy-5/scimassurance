<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            // 'nom_complet' => 'required','max:30',
            'adresse_mail' => ['required', 'string', 'email', 'max:255'],
            // 'sujet' => 'required','max:30',
            // 'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            // 'message' => 'required','max:500',
         ]);
        
        Newsletter::create([
                // 'nom_complet'=>$request->nom_complet,
                'adresse_mail' => $request->adresse_mail,
                // 'sujet'=>$request->sujet,
                // 'message'=>$request->message,
               
        ]);

        return back()->with('success', 'Gmail enregistrer avec succes');
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
        //
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
        //
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
