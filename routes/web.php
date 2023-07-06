<?php

use App\Models\Citation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CitationController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $citation = Citation::orderBy('id', 'DESC')->get();
    return view('citation.index', compact('citation'));
});

// Routes pour le contrôleur de citation.
// Cette route génère plusieurs routes pour effectuer différentes opérations CRUD sur les citations.
Route::resource('/citation', CitationController::class);

// Routes pour le contrôleur d'auteur.
// Cette route génère plusieurs routes pour effectuer différentes opérations CRUD sur les auteurs.
Route::resource('/author', AuthorController::class);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('/user')->name('user.')->controller(AuthController::class)->middleware('admin')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
