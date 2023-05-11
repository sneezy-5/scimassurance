<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::count();
        $newletters = Newsletter::count();
        $contacts = Contact::count();

        return view('admin.index',compact('actualites','newletters','contacts'));
    }

    public function messages(){
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }


    public function newsletterSucribers(){
        $neslettersSuscribers = Newsletter::all();
        return view('admin.newsletterSuscriber',compact('neslettersSuscribers'));
    }

    public function newsletterDestroy($id){
        Newsletter::find($id)->delete();
        return redirect()->back();
    }
}
