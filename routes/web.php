<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PorteFolioController;



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

Route::get('/', [FrontController::class ,"index"])->name('home');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/portefolio', [FrontController::class ,"portefolio"])->name('portefolio');
Route::get('/contact', [FrontController::class,"contact"])->name('contact');
Route::get('/admin',[FrontController::class,"dashboard"])->name('dash');

// afficher
Route::get('/admin/dashboard/blog', [BlogController::class,"index"])->name('blog_form');
Route::get('/admin/dashboard/portefolio',[PorteFolioController::class,"index"])->name('portefolio_form');
// Get
Route::get('/admin/blog',[BlogController::class,"create"])->name('blog_create');
Route::get('/admin/portefolio',[PorteFolioController::class,"create"])->name('portefolio_create');

// Post
Route::post('/admin/blog/store',[BlogController::class,"store"])->name('blog_store') ;
Route::post('/admin/portefolio/store',[PorteFolioController::class,"store"])->name('portefolio_store');

// ROUTES DASHBOARD BLOG ET PORTEFOLIO

Route::get('/admin/porteFolio/change', [PorteFolioController::class , "modif"])->name('portefolio.change');

// SUPPRIMER

Route::delete('admin/portefolio/delete/{id}', [PorteFolioController::class , "destroy"])->name('portefolio.destroy') ;

//SHOW

Route::get('/admin/porteFolio/show/{id}', [PorteFolioController::class , "show"])->name('portefolio.show');

// Edit
Route::get('/admin/porteFolio/edit/{id}', [PorteFolioController::class , "edit"])->name('portefolio.edit');

// Update

Route::put('/admin/portefolio/update/{id}' ,[PorteFolioController::class , "update"])->name('portefolio.update') ;
