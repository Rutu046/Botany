<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leaderController;

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
    return view('layout.index');
});


Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/editeam', function () {
    return view('edit_team');
});

Route::get('/conference', function () {
    return view('conference');
});

Route::get('/article-processing-charges', function () {
    return view('apc');
});

Route::get('/journalsubscription', function () {
    return view('journalsubscription');
});

Route::get('/dutiesofreviewers', function () {
    return view('reviewers');
});

Route::get('/dutiesofauthors', function () {
    return view('authors');
});

Route::get('/ethicalguidelines', function () {
    return view('ethicalguideline');
});

Route::get('/policydetail', function () {
    return view('policydetail');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/termsandcond', function () {
    return view('termsandcond');
});

Route::get('/userinfo', function () {
    return view('userinfo');
});

Route::get('/manuscript', function () {
    return view('manuscript');
});

