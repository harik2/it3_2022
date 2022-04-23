<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ProduitController;
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
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/x', function () {
    return view('accueil');
});
// Route::get('/contact', function () {
//     return view('contact',['nom'=>'Alami','prenom'=>'ali','age'=>20]);
// });
// contact/19
Route::get('/contact/{age?}', function ($age=0) {
    return view('contact',['nom'=>'HACHIMI','prenom'=>'hicham','age'=>$age]);
});
Route::get('/somme/{a}/{b}', function ($age=0) {
    return view('contact',['nom'=>'HACHIMI','prenom'=>'hicham','age'=>$age]);
});
Route::get('/h', [HomeController::class,'index']);

Route::get('/part/{id}', [HomeController::class, 'partenaire']);
Route::get('/calcul', [HomeController::class, 'calcul']);

Route::get('/produits', [ProduitController::class, 'listeProduits']);
Route::get('/personnes', [PersonneController::class, 'index']);
Route::get('/personnes/{numero}', [PersonneController::class, 'find']);

Route::get('pcs/form', [PcController::class,'create'])->name('pcs.create');
Route::post('pcs', [PcController::class,'store'])->name('pcs.store');
