<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArtistController::class, 'index'])->name('home');
Route::get('artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');
Route::post('artists/{artist}/albums', [AlbumController::class, 'store'])->name('artists.addAlbum');
Route::get('artists/{artist}/albums/{album}', [AlbumController::class, 'destroy'])->name('artists.deleteAlbum');
