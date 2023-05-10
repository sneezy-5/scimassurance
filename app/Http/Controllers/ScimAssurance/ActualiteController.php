<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //
    public function index()
    {
        $assuauto = Actualite::where('type', 'assuranceauto')->take(1)->orderBy("created_at", "desc")->get();
        $assumala = Actualite::where('type', 'assurancemaladie')->take(1)->orderBy("created_at", "desc")->get();
        $assutrans = Actualite::where('type', 'assurancetransport')->take(1)->orderBy("created_at", "desc")->get();
        $assuvoy = Actualite::where('type', 'assurancevoyage')->take(1)->orderBy("created_at", "desc")->get();
        $multirisqhab  = Actualite::where('type', 'multirisquehabitation')->take(1)->orderBy("created_at", "desc")->get();
        $multirisqpro = Actualite::where('type', 'multirisqueprofessionnel')->take(1)->orderBy("created_at", "desc")->get();
        $tousrisqchan = Actualite::where('type', 'tousrisquechantier')->take(1)->orderBy("created_at", "desc")->get();


        return view('template.actualite.actualite', compact('assuauto','assumala','assutrans','assuvoy',
                                                            'multirisqhab','multirisqpro','tousrisqchan'));
    }
}
