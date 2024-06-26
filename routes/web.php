<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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
    $comics = config('comics_db.comics');
    return view('home',compact('comics'));
})->name('home');

Route::get('/about-me', function () {
    $comics = config('comics_db.comics');
    return view('pages.about',compact('comics'));
})->name('about');



Route::resource('comics', ComicController::class);