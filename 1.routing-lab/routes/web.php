<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route par défaut
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/bonjour', function () {
    return 'Bonjour ESSARRAJ Fouad';
});


Route::get('/', [HomeController::class, 'index']);


Route::get('/produit/{id}', function ($id) {
    return 'Affichage du produit numéro '.$id;
});

Route::get('/produit/{param1}/commentaire/{param2}', function ($produitId, $commentaireId) {
    return 'Le produit numéro '.$produitId. 'avec la commentaire numéro '.$commentaireId;
});