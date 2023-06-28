<?php

use App\Models\Citation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CitationController;

Route::get('/', function () {
    $citation = Citation::orderBy('id', 'DESC')->get();
    return view('citation.index', compact('citation'));
});

Route::resource('/citation', CitationController::class);
Route::resource('/author', AuthorController::class);
