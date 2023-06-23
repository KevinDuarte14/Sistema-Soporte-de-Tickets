<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commonUserController;

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

Auth::routes();


Route::get('/index', [App\Http\Controllers\commonUserController::class, 'index'])->middleware('auth')->name('index');
Route::get('/misTickets', [App\Http\Controllers\commonUserController::class, 'ListarTickets'])->middleware('auth')->name('misTickets');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/createTicket', [App\Http\Controllers\commonUserController::class, 'CreateTicket'])->middleware('auth')->name('createTicket');

Route::post('/saveTicket', [commonUserController::class, 'saveTicket'])->middleware('auth')->name('saveTicket');

