<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('vita.home');
});


Route::get('/lapor', [Controller::class, 'lapor']);
Route::get('/lapor1', [Controller::class, 'lapor1']);
Route::get('/lapor2', [Controller::class, 'lapor2']);
Route::get('/lapor3_up1', [Controller::class, 'lapor3up1']);
Route::get('/lapor3_up2', [Controller::class, 'lapor3up2']);
Route::get('/lapor4', [Controller::class, 'lapor4']);
Route::get('/status_verif', [Controller::class, 'statusVerif']);
Route::get('/verif', [Controller::class, 'verif']);
