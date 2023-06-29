<?php

use App\Models\Author;
use App\Models\Citation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
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
Route::get('citation', function () {
    return response(Citation::with('author')->get(), 200);
});
Route::get('citation/{id}', function ($id) {
    return response(Citation::with('author')->find($id), 200);
});
Route::get('author', function () {
    return response(Author::all(),200);
});
Route::get('author/{id}', function ($id) {
    return response(Author::find($id), 200);
});
