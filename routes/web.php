<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/' , function(){
    return view('home.index');
})->name('index');


Route::prefix('contato')
    ->controller(ContatoController::class)
    ->group(function ()
    {
        route::get('/', 'index')->name('contato.index');
        route::get('/novo', 'create')->name('contato.create');
        route::post('/cadastrar', 'store')->name('contato.store');
    });



require __DIR__.'/auth.php';
