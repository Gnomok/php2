<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('Maksym_Tverdokhlibov/313682/people', PeopleController::class);
Route::get('Maksym_Tverdokhlibov/313682/people', [PeopleController::class, 'index']);
Route::get('Maksym_Tverdokhlibov/313682/people/{id}', [PeopleController::class, 'show']);

