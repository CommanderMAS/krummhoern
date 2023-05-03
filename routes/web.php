<?php

use App\Http\Controllers\AktuellesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ChangesController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjekteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/aktuelles', [FrontendController::class, 'viewAktuelles'])->name('aktuelles');
Route::get('/aktuelles/{id}/{text}', [FrontendController::class, 'viewAktuelleNews'])->name('aktuelles.news');

Route::get('/projekte', [FrontendController::class, 'projekte'])->name('projekte');
Route::get('/projekte/{id}/{text}', [FrontendController::class, 'viewAktuellesProjekt'])->name('projekte.news');

Route::get('/organisation', [FrontendController::class, 'organisation'])->name('organisation');
Route::get('/anfahrt', [FrontendController::class, 'anfahrt'])->name('anfahrt');
Route::get('/aufgaben', [FrontendController::class, 'aufgaben'])->name('aufgaben');
Route::get('/verbandsgebiet', [FrontendController::class, 'verbandsgebiet'])->name('verbandsgebiet');
Route::get('/satzung', [FrontendController::class, 'satzung'])->name('satzung');
Route::get('/beitraege', [FrontendController::class, 'beitraege'])->name('beitraege');
Route::get('/infoflyer', [FrontendController::class, 'infoflyer'])->name('infoflyer');
Route::get('/buchreihe', [FrontendController::class, 'buchreihe'])->name('buchreihe');
Route::get('/link', [FrontendController::class, 'link'])->name('link');

Route::get('/dashboard', [ChangesController::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard', [ChangesController::class, 'save'])->middleware(['auth', 'verified'])->name('changes.save');

Route::get('/import', [ImportController::class, 'view'])->middleware(['auth', 'verified'])->name('import');
Route::post('/import', [ImportController::class, 'execute'])->middleware(['auth', 'verified'])->name('import.execute');

Route::get('/export', [ExportController::class, 'view'])->middleware(['auth', 'verified'])->name('export');
Route::post('/export', [ExportController::class, 'export'])->middleware(['auth', 'verified'])->name('export.execute');

Route::get('/config', [ConfigController::class, 'view'])->middleware(['auth', 'verified'])->name('config');
Route::post('/config', [ConfigController::class, 'save'])->middleware(['auth', 'verified'])->name('config.execute');

//Aktuelles
Route::get('/admin/aktuelles', [AktuellesController::class, 'news_index'])->middleware(['auth', 'verified'])->name('aktuelles_index');
Route::get('/admin/aktuelles/new', [AktuellesController::class, 'news_create'])->middleware(['auth', 'verified'])->name('aktuelles_create');
Route::put('/admin/aktuelles/new', [AktuellesController::class, 'news_store'])->middleware(['auth', 'verified'])->name('aktuelles_store');
Route::get('/admin/aktuelles/{id}/edit', [AktuellesController::class, 'news_edit'])->middleware(['auth', 'verified'])->name('aktuelles_edit');
Route::put('/admin/aktuelles/{id}/update', [AktuellesController::class, 'news_update'])->middleware(['auth', 'verified'])->name('aktuelles_update');
Route::delete('/admin/aktuelles/{id}/delete', [AktuellesController::class, 'news_delete'])->middleware(['auth', 'verified'])->name('aktuelles_delete');

//Projekte
Route::get('/admin/projekte', [ProjekteController::class, 'news_index'])->middleware(['auth', 'verified'])->name('projekte_index');
Route::get('/admin/projekte/new', [ProjekteController::class, 'news_create'])->middleware(['auth', 'verified'])->name('projekte_create');
Route::put('/admin/projekte/new', [ProjekteController::class, 'news_store'])->middleware(['auth', 'verified'])->name('projekte_store');
Route::get('/admin/projekte/{id}/edit', [ProjekteController::class, 'news_edit'])->middleware(['auth', 'verified'])->name('projekte_edit');
Route::put('/admin/projekte/{id}/update', [ProjekteController::class, 'news_update'])->middleware(['auth', 'verified'])->name('projekte_update');
Route::delete('/admin/projekte/{id}/delete', [ProjekteController::class, 'news_delete'])->middleware(['auth', 'verified'])->name('projekte_delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return view('welcome');
})->name('home.any');

Route::get('admin/{any}', function () {
    return view('welcome');
})->name('any.any');

