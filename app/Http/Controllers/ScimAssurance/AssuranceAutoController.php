<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssuranceAutoController extends Controller
{
    //
    public function index()
    {
        return view('template.nosservices.assuranceauto');
    }
}
