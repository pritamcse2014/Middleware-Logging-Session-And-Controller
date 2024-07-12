<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
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
    return view('welcome');
});

Route::get('/hello1/{key}', [DemoController::class, 'DemoAction1'])->middleware([DemoMiddleware::class]);

Route::get('/hello2', [DemoController::class, 'DemoAction2']);
