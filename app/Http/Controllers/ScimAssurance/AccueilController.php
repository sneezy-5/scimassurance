<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
    //
    public function index()
    {
        $assuauto = Actualite::where('type', 'Assurance auto')->take(1)->orderBy("created_at", "desc")->get();
        $assumala = Actualite::where('type', 'Assurance maladie')->take(1)->orderBy("created_at", "desc")->get();
        $assutrans = Actualite::where('type', 'Assurance transport')->take(1)->orderBy("created_at", "desc")->get();
        $assuvoy = Actualite::where('type', 'Assurance voyage')->take(1)->orderBy("created_at", "desc")->get();
        $multirisqhab  = Actualite::where('type', 'Multirisque habitation')->take(1)->orderBy("created_at", "desc")->get();
        $multirisqpro = Actualite::where('type', 'Multirisque professionnel')->take(1)->orderBy("created_at", "desc")->get();
        $tousrisqchan = Actualite::where('type', 'Tous risque chantier')->take(1)->orderBy("created_at", "desc")->get();


        return view('accueil', compact('assuauto','assumala','assutrans','assuvoy',
                                                            'multirisqhab','multirisqpro','tousrisqchan'));
      
    }
}
