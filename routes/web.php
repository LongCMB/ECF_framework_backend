<?php

use App\Models\Citation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CitationController;

// Route pour la page d'accueil qui affiche la liste des citations.
// Les citations sont triées par 'id' en ordre décroissant.
Route::get('/', function () {
    $citation = Citation::orderBy('id', 'DESC')->get();
    // Retourne la vue 'citation.index' avec les citations comme données.
    return view('citation.index', compact('citation'));
});

// Routes pour le contrôleur de citation.
// Cette route génère plusieurs routes pour effectuer différentes opérations CRUD sur les citations.
Route::resource('/citation', CitationController::class);

// Routes pour le contrôleur d'auteur.
// Cette route génère plusieurs routes pour effectuer différentes opérations CRUD sur les auteurs.
Route::resource('/author', AuthorController::class);
