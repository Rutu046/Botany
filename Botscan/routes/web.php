<?php

use App\Http\Controllers\ProfileController;
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
    return view('home');
});


Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/editorial-advisory-board', function () {
    return view('edit_team');
});

Route::get('/conference-proceedings', function () {
    return view('conference');
});

Route::get('/artical-processing-charges', function () {
    return view('apc');
});

Route::get('/journal-subscriptions', function () {
    return view('journalsubscription');
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

Route::get('/policy-details', function () {
    return view('policydetail');
});

Route::get('/privacy-policy', function () {
    return view('privacypolicy');
});

Route::get('/terms-and-conditions', function () {
    return view('termsandcond');
});

Route::get('/userinfo', function () {
    return view('userinfo');
});

Route::get('/manuscript-preperation', function () {
    return view('manuscript');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
