<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteProductController;
use App\Http\Controllers\RouteUserController;



// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [RouteProductController::class, 'showHomeProductHot'])->name('showHomeProductHot');
Route::get('/register', function () {
    return view('layouts.register');
})->name('register');
Route::get('/login', [RouteUserController::class,'showLoginForm'])->name('login');
Route::post('/login', [RouteUserController::class,'login'])->name('acpLogin');

Route::prefix('/admin')->group(function () {
    Route::get('/show-Product', [RouteProductController::class, 'showProduct'])->name('showProduct');
    Route::get('/input-Product',[RouteProductController::class, 'viewInputProduct'])->name('viewInputProduct');
    Route::post('/add-Product',[RouteProductController::class, 'addProduct'])->name('addProduct');
    Route::delete('/delete-Product/{id}', [RouteProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('/edit-Product/{id}', [RouteProductController::class,'editProduct'])->name('editProduct');
    Route::put('/update-Product/{id}', [RouteProductController::class,'updateProduct'])->name('updateProduct');

    Route::get('/show-User',[RouteUserController::class, 'showUser'])->name('showUser');
    Route::post('/add-User',[RouteUserController::class, 'addUser'])->name('addUser');
    Route::get('/show-Comment',[RouteUserController::class, 'showComment'])->name('showComment');

});
Route::get('/show-Product-Detail/{id}',[RouteProductController::class,'productDetail'])->name('productDetail');
Route::post('/comment',[RouteUserController::class,'comment'])->name('comment');
Route::get('/search', [RouteProductController::class,'search'])->name('search');

Route::prefix('/session')->group(function () {
    Route::get('/get', [RouteUserController::class,'getSession']);
    Route::get('/set', [RouteUserController::class,'setSession']);
    Route::get('/unSet', [RouteUserController::class,'unSetSession'])->name('logout');
});