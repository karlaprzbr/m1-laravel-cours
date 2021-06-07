<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LivresController;

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
    return redirect('/templating');
});

Route::get('/templating', function () {
    return view('templating');
});

Route::get('/routes', function () {
    return view('routes');
});

Route::get('/controllers', function () {
    return view('controllers');
});

Route::get('/bdd', function () {
    return view('bdd');
});

// FORMULAIRES
Route::get('/form', [
    TestController::class, "form"
]);

Route::post('form', [
    TestController::class, "form"
]);

// Route::match(["get", "post"], "/formulaire", [TestController::class, "form"]);

// MODELS
Route::get('/livres', [
    LivresController::class, "liste"
]);