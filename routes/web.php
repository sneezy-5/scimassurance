<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ActualitesController;
use App\Http\Controllers\ScimAssurance\AboutController;
use App\Http\Controllers\ScimAssurance\ContactController;
use App\Http\Controllers\ScimAssurance\AccueilController;
use App\Http\Controllers\ScimAssurance\ActualiteController;
use App\Http\Controllers\ScimAssurance\AssuranceAutoController;
use App\Http\Controllers\ScimAssurance\AssuranceMalController;
use App\Http\Controllers\ScimAssurance\AssuranceTransController;
use App\Http\Controllers\ScimAssurance\AssuranceVoyController;
use App\Http\Controllers\ScimAssurance\MultiRisqHabController;
use App\Http\Controllers\ScimAssurance\MultiRisqProController;
use App\Http\Controllers\ScimAssurance\NewsletterController;
use App\Http\Controllers\ScimAssurance\ToutRisqChanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [AccueilController::class, 'index'])->name('/');

Route::get('/quisommesnous', [AboutController::class, 'index'])->name('quisommesnous');

Route::get('/actualite', [ActualiteController::class, 'index'])->name('actualite');

//nosservices

Route::get('/nosservices/multirisqueprofessionnel', [MultiRisqProController::class, 'index'])->name('multirisqpro');

Route::get('/nosservices/multirisquehabitation', [MultiRisqHabController::class, 'index'])->name('multirisqhab');

Route::get('/nosservices/toutrisquechantier', [ToutRisqChanController::class, 'index'])->name('tousrisqchan');

Route::get('/nosservices/assurancetransport', [AssuranceTransController::class, 'index'])->name('assurancetrans');

Route::get('/nosservices/assurancevoyage', [ AssuranceVoyController::class, 'index'])->name('assurancevoy');

Route::get('/nosservices/assurancemaladie', [AssuranceMalController::class, 'index'])->name('assurancemal');

Route::get('/nosservices/assuranceautomobile', [AssuranceAutoController::class, 'index'])->name('assuranceauto');

// formulaire
Route::resource('/contact', ContactController::class)->only([
        "index","store"
    ]
);

Route::resource('/newsletter', NewsletterController::class)->only([
        "store"
    ]
);



/**
 * admin root
 * middleware set ato auth user when is loggin
*/
Route::middleware(['auth'])->group(function(){

        Route::get('/admin/dashboard',[DashboardController::class, 'index']);
        Route::get('/admin/contacts',[DashboardController::class, 'messages'])->name('admin.message');
        Route::get('/admin/newsletters',[DashboardController::class, 'newsletterSucribers'])->name('admin.newsletter');
        Route::resource('admin/actualites',ActualitesController::class);
        Route::put('/admin/newsletters/{newsletter}',[DashboardController::class, 'newsletterDestroy'])->name('newleter.delete');


    });



require __DIR__.'/auth.php';
