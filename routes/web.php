<?php

use App\Models\User;
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
//
Route::get('/', function () {
    return view('home');
});

//Route::get('/users', function () {
//    return User::all();
//});
//
//Route::get('/notes', function () {
//    return \App\Models\Tag::all();
//});
//
//Route::get('/tags', function () {
//    return \App\Models\Tag::all();
//});
//Route::get('/user-notes', function () {
//    return User::find(9)->notes;
//});
//Route::get('/user-tags', function () {
//    return User::first()->tags;
//});
//Route::get('/note-tags', function () {
//    return \App\Models\Note::first()->tags;
//});
//
//Route::get('/tag-notes', function () {
//    return \App\Models\Tag::first()->notes;
//});

Route::get('/{any}', function () {
    return view('home');
});
Route::get('/{any}/{any2?}', function () {
    return view('home');
});


