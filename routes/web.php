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

Route::get('nana', function () {
    return view('nana.lapor4');
});

Route::get('/lapor3_upload2', [Controller::class, 'lapor3up2']);
Route::get('/status_verif', [Controller::class, 'statusVerif']);

