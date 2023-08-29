<?php

// Chemin pour la création d'un nouveau controller
use App\Http\Controllers\exercice1Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [exercice1Controller::class, 'index']);

Route::get('/projects', [exercice1Controller::class, 'projects']);

Route::get('/resume', [exercice1Controller::class, 'resume']);

Route::get('/contact', [exercice1Controller::class, 'contact']);
Route::post('/contact', [exercice1Controller::class, 'contactForm']);
