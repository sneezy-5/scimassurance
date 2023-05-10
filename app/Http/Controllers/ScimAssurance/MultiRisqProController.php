<?php

namespace App\Http\Controllers\ScimAssurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiRisqProController extends Controller
{
    //
    public function index()
    {
        return view('template.nosservices.multirisqpro');
    }
}
