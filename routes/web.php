<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/test/calcul', function () {
    return view('calcul', ["nb1"=>7, "nb2"=>8]);
});

Route::get('/test/calcul/{nb1}', function ($nb1) {
    return view('calcul', ["nb1"=>$nb1, "nb2"=>8]);
});

Route::get('/test/calcul/{nb1}/{nb2}', function ($nb1, $nb2) {
    return view('calcul', ["nb1"=>$nb1, "nb2"=>$nb2]);
});

// Route::get('/test2', [
//     TestController::class, "index"
// ]);

Route::get('/form', [
    TestController::class, "form"
]);

Route::post('form', [
    TestController::class, "form"
]);

// Route::match(["get", "post"], "/formulaire", [TestController::class, "form"]);