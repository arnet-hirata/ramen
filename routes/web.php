<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RankingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\MyPostsController;
use App\Http\Controllers\DashboardController; //ダッシュボードコントローラー
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('/ranking', RankingController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('place', PlacesController::class);
    Route::get('/myposts', [MyPostsController::class, 'index'])->name('myposts.index');
    Route::get('/myposts/edit/{id}', [MyPostsController::class, 'edit'])->name('myposts.edit');
    Route::patch('/myposts/update/{id}', [MyPostsController::class, 'update'])->name('myposts.update');
    Route::delete('/myposts/destroy/{id}', [MyPostsController::class, 'destroy']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/place/{id}', [PlacesController::class, 'show'])->name('places.show');
    Route::get('/store/create', [StoreController::class, 'create'])->name('stores.create');
    Route::post('/store/confirm', [StoreController::class, 'confirm']);
    // 完了画面
// アクセスすると、Viewのcomplete.blade.phpを呼び出す
    Route::post('/place', [PlacesController::class, 'store'])->name('places.store');

});
require __DIR__.'/auth.php';