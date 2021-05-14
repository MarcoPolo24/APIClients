<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerView;
use App\Models\Client;

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

Route::get('/insertClients', function () {
    return view("client");
});

Route::get('/clients', [ControllerView::class, 'home']);
