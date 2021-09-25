<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::redirect('/', 'inicio');

Route::get('inicio', function () {
    return view('index.index');
});

Route::get('sesion-productos', function () {
    return view('index.productos');
});
Route::get('contactos', function () {
    return view('index.contactenos');
});


Route::get('dashboard', function () {
    return view('dashboard');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('productos', ProductController::class);
