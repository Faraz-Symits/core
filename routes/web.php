<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wellcome;
use App\Http\Controllers\SignUp;

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

Route::get('/', [Wellcome::class, 'index']);
Route::get('/sign', [SignUp::class, 'index']);
