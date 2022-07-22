<?php

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

    $nome= "Leka";
    $idade=20;
    $arr= [1,2,3,4,5];

    return view('welcome', [
    'nome'=> $nome,
     'idade'=> $idade,
     'arr'=> $arr
    ]);
});


Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
