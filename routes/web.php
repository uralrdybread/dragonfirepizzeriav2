<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ToppingController;

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



// need to figure out why resource isn't working some of these
Route::get('/pizzas/menu', [PizzaController::class, 'menu']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('pizzas/create', [PizzaController::class, 'create']);
Route::resource('pizzas', PizzaController::class)->only(['index', 'show'])->middleware('admin');


// toppings controller
Route::resource('/toppings', ToppingController::class)->middleware('admin');

// Dashboard route (requires authentication and email verification)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (login, register, password reset, etc.)
require __DIR__.'/auth.php';
