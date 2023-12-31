<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notice_Controller;

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

Route::get('/',[ notice_Controller::class, 'index'])->name('list');

Route::get('/create', function () {
    return view('create');
})->name('create');
Route::post('/createPost',[ notice_Controller::class, 'write'])->name('write');

Route::get('/Post/{id}',[notice_Controller::class, 'read'])->name('read');

Route::get('/updatepost/{id}',[notice_Controller::class, 'updatepost'])->name('updatepost');

Route::post('/updatepost/{id}',[notice_Controller::class, 'edit'])->name('edit');

Route::get('/delete/{id}',[notice_Controller::class, 'delete'])->name('delete');
