<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\HandlerController;
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


Route::get('/',  [PagesController::class, 'home'])->name('home');
Route::get('/dashboard',  [PagesController::class, 'dashboard'])->name('pages.dashboard');
Route::get('/report',  [PagesController::class, 'report'])->name('pages.report');
//Route::get('/viewer',  [PagesController::class, 'viewer'])->name('pages.viewer');
Route::get('/viewer',  [PagesController::class, 'viewer'])->name('pages.viewer');

Route::get('/sample',  [PagesController::class, 'sample'])->name('pages.sample');
Route::get('/designer',  [PagesController::class, 'designer'])->name('pages.designer');
//Route::any('/handler', [HandlerController::class, 'process']);

//Route::get('/viewer/{rpt}',  [PagesController::class, 'viewer'])->name('pages.viewer');
//Route::get('/viewer/{rpt}',  'PagesController@viewer')->name('pages.viewer');;

// STIMULSOFT 
// Route::get('/designer', function () {
//     return view('designer');
// });

Route::any('/handler', [HandlerController::class, 'process']);
