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

Route::get('/userinfo', function () {
    return view('userinfo');
});

Route::get('/manuscript-preperation', function () {
    return view('manuscript');
});

Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/editorial-advisory-board', function () {
    return view('edit_team');
});


<<<<<<< HEAD
Route::get('/policy-details', function () {
=======
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
>>>>>>> 2c507bf222c7e46f08dbfc84563be28e1762abcf
    return view('policydetail');
});

Route::get('/privacy-policy', function () {
    return view('privacypolicy');
});

Route::get('/terms-and-conditions', function () {
    return view('termsandcond');
});



Route::get('/duties-of-reviewers', function () {
    return view('reviewers');
});

Route::get('/duties-of-authors', function () {
    return view('authors');
});

Route::get('/ethical-guidelines', function () {
    return view('ethicalguideline');
});

Route::get('/conference-proceedings', function () {
    return view('conference');
});

Route::get('/artical-processing-charges ', function () {
    return view('apc');
});

Route::get('/journal-subscriptions', function () {
    return view('journalsubscription');
});





