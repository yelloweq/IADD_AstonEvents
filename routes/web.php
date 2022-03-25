<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

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

//Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Make dashboard route available only for logged in users
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('events', [EventController::class, 'index'])->name('events');
Route::get('events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('events/{id}/like', [EventController::class, 'like'])->name('events.like');
Route::get('events/{id}/book', [EventController::class, 'store'])->name('events.book');
Route::get('events/{id}/cancel', [EventController::class, 'destroy'])->name('events.unbook');


// To lock events for auth users only, uncomment below func and change navbar
// route from 'events' to 'events.index'
// Route::group(['middleware' => 'auth'], function() {
//     Route::resource('events',EventController::class);
// });



require_once __DIR__ . '/jetstream.php';