<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RankingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\MyPostsController;
use App\Http\Controllers\DashboardController; //ダッシュボードコントローラー


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
    Route::get('/mypost', [MyPostsController::class, 'index'])->name('myposts.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/place/{id}', [PlacesController::class, 'show'])->name('places.show');

});

use App\Models\places; 
// 選手名と所属チーム名を一覧表示
//Route::get('/place', function(){

    // playersテーブルのデータをすべて取得
    // $all_places = places::all();
    // foreach($all_places as $place){
    //     print("<div>地名：{$place->place_name}</div>");
    //     print("<div>店名：");
    //         foreach($place->stores as $store) {
    //             print("{$store->store_name} / ");
    //         }
    //     print('</div><br>');
    //     }
// })->name('place.index');

require __DIR__.'/auth.php';
