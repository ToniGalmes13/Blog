<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\libroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sugerenciaControler;
use App\Http\Controllers\noticiaControler;
use Illuminate\Support\Facades\Auth;
//Route :: get ()

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

/**enllaços basics */
Route::get('/inicio', [blogController::class, 'index']);


Route::get('/biografia', function () {
    return view('biografia');
});
Route::get('/libros', function () {
    return view('libros');
});


/**enllaços extres 
Route::get('/llibre', function () {
    return view('llibre');
});*/
Route::get('/noticia', function () {
    return view('noticia');
});

/**controllers per la compra funciona 
Route::get('/compra', [compraController::class, 'index']);*/
Route::post('/libros', [libroController::class, 'store'])->name('comprado');

/*controllers sugerencies funciona*/
Route::get('/comentar', [sugerenciaControler::class, 'index']);
Route::post('/comentar', [sugerenciaControler::class, 'store'])->name('comentari');


/*controllers noticias funciona*/
Route::get('/noticia', [noticiaControler::class, 'index']);
Route::post('/noticia', [noticiaControler::class, 'store'])->name('noticia');
