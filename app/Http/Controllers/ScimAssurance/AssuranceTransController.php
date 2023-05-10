<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssuranceTransController extends Controller
{
    //
    public function index()
    {
        return view('template.nosservices.assurancetrans');
    }
}
