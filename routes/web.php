<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MusicController;

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

Route::get('/', function() {
    if(auth()->guest()) {
        return redirect('/login');
    }

    return view('pages.home');
});

Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){

    Route::get('/musics/create',[MusicController::class, 'create']);
    // Route::get('/musics/create',[MusicController::class, 'create']);

    Route::post('/musics',[MusicController::class, 'store']);



    Route::get('/musics/listeners',[MusicController::class, 'musicList']);



    Route::get('/musics/recent',[MusicController::class, 'recentMusic']);

    Route::get('/musics/open/{lis}',[MusicController::class, 'open'])->middleware('delete');
    Route::get('/musics/list/{lis}',[MusicController::class, 'list']);
    Route::get('/musics/delete/{lis}',[MusicController::class, 'delete']);

    Route::get('/musics/edit/{lis}',[MusicController::class, 'edit'])->middleware('edit');
    Route::get('/musics/{lis}',[MusicController::class, 'show']);

    Route::put('/musics/{lis}',[MusicController::class, 'update'])->middleware('edit');




    Route::get('/logout',[AuthController::class, 'logout']);


});
