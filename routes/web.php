<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteProductController;
use App\Http\Controllers\RouteUserController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [RouteProductController::class, 'showHomeProductHot'])->name('showHomeProductHot');
Route::get('/register', function () {
    return view('layouts.register');
})->name('register');
Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::prefix('/admin')->group(function () {
    Route::get('/show-Product', [RouteProductController::class, 'showProduct'])->name('showProduct');
    Route::get('/input-Product',[RouteProductController::class, 'viewInputProduct'])->name('viewInputProduct');
    Route::post('/add-Product',[RouteProductController::class, 'addProduct'])->name('addProduct');
    Route::delete('/delete-Product/{id}', [RouteProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('/edit-Product/{id}', [RouteProductController::class,'editProduct'])->name('editProduct');
    Route::put('/update-Product/{id}', [RouteProductController::class,'updateProduct'])->name('updateProduct');
    
    Route::get('/show-User',[RouteUserController::class, 'showUser'])->name('showUser');
    Route::post('/add-User',[RouteUserController::class, 'addUser'])->name('addUser');
});