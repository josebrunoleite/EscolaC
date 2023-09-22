<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    /* User Mod */
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    
    /* modder */
    Route::get('formulario', [App\Http\Controllers\HomeController::class, 'formulario'])->name('formulario');
   
    /* Curso Mod */
    Route::get('cursos', [App\Http\Controllers\CursoController::class, 'cursoHome'])->name('cursoHome');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::get('another', [\App\Http\Controllers\ProfileController::class, 'anotherShow'])->name('another.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    /* Admin */
    Route::get('homeAdmin', [\App\Http\Controllers\AdminController::class, 'homeAdmin'])->name('Admin.home');

    /* Prof */
    Route::get('homeProf', [\App\Http\Controllers\ProfController::class, 'homeProf'])->name('Prof.home');

    /* Pagamento */
    Route::get('carrinho', [\App\Http\Controllers\PagamentoController::class, 'homeCarrinho'])->name('carrinho.home');
    /* Pessoal */
});
