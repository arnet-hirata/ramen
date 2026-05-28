<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RankingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlacesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/ranking', RankingController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('place', PlacesController::class);
    Route::get('/mypost', [MyPostsController::class, 'edit'])->name('myposts.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
