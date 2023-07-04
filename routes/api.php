<?php

use App\Models\Author;
use App\Models\Citation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes d'API
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer les routes d'API pour votre application. Ces
| routes sont chargées par RouteServiceProvider et toutes seront
| attribuées au groupe de middleware "api". Faites quelque chose de génial !
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('citation', function () {
//     return response(Citation::all(),200);
// });
// Route::get('citation/{id}', function ($id) {
//     return response(Citation::find($id), 200);
// });

// Route pour obtenir toutes les citations avec leur auteur respectif.
Route::get('citation', function () {
    // 'with' permet de charger la relation 'author' en une seule fois pour éviter le problème N+1
    return response(Citation::with('author')->get(), 200);
});

// Route pour obtenir tous les auteurs.
Route::get('author', function () {
    return response(Author::all(),200);
});

// Route pour obtenir un auteur spécifique en fonction de son 'id'.
Route::get('author/{id}', function ($id) {
    return response(Citation::where('author_id', $id)->get(), 200);
});
