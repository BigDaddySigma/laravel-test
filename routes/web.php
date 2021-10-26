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

Route::get('/addnote', function () {
    return view('addnote');
})->name('addnote');

Route::get('/editnote', function () {
    return view('editnote');
})->name('editnote');

Route::get('/deletenote', function () {
    return view('deletenote');
})->name('deletenote');

Route::post('/addnotesubmit', 'addnoteController@addNote')->name('addnotesubmit');
Route::get('/review', 'getnotesController@getNotes')->name('review');
Route::get('/note&id={id}', 'getnotesController@getNotes')->name('reviewById');
Route::get('/review&order={type}&mode={mode?}', 'getnotesController@getNotesOrdered')->name('reviewOrdered');
Route::get('/editnote&id={id?}', 'editnotesController@findNote')->name('findNote');
Route::post('/findnotesubmit', 'editnotesController@findNoteById')->name('findNoteById');
Route::post('/editnotesubmit&id={id}', 'editnotesController@editNote')->name('editNote');
Route::get('/deletenote&id={id?}', 'deletenoteController@findNote')->name('findNoteForDelete');
Route::post('/findnotefordeletesubmit', 'deletenoteController@findNoteById')->name('findNoteByIdForDelete');
Route::get('/deletenoteconfirmed&id={id}', 'deletenoteController@deleteNote')->name('deleteNote');