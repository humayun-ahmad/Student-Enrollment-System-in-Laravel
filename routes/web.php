<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});


// Admin Login....
Route::post('/login', 'AdminController@login_dashbord');
// Route::post('/admin/login', 'AdminController@login_dashbord')->name('admin');
