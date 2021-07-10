<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Comics
Route::get('/comics', function () {
    $comics = config('comics.data');
    $mainList = config('comics.mainList');
    return view('comics.index',compact('comics'),compact('mainList'));
})->name('comics');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics.data');
    if(is_numeric($id) && $id < count($comics) && $id >= 0){
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    }else{
        abort(404);
    }
})->name('comic');
// END Comics