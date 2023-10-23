<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\P_manage_Controller;

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


Route::get('/', [P_manage_Controller::class, 'Home']);
Route::get('/about', [P_manage_Controller::class, 'About']);
Route::get('/contact', [P_manage_Controller::class, 'Contact']);

