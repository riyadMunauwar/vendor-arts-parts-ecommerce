<?php

use Illuminate\Support\Facades\Route;
use App\Services\SweetAlertToast;
use App\Services\SweetAlert;

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
    return view('admin.pages.dashboard');

    // echo 'done';
});


Route::get('/swal', function(){
    $toast = new SweetAlert();
    $toast->error('success', 'lorem ispum omit submit', );
    return view('admin.pages.dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
