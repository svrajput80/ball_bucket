<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ballbucket;

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

Route::get('/books', function () {
    return view('books');
});


Route::post('/addBox',[ballbucket::class, 'addBox']);
Route::post('/addBook',[ballbucket::class, 'addBook']);
Route::post('/showbox',[ballbucket::class, 'showBox']);
Route::get('/book',[ballbucket::class, 'showBook']);
Route::post('/savebox',[ballbucket::class, 'savebox']);