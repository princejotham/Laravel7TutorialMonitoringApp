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
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('member', function () {
    return view('admin.member');
});

Route::get('teacher', function () {
    return view('admin.teacher');
});

Route::get('leveltest', function () {
    return view('admin.leveltest');
});

Route::get('makehold', function () {
    return view('admin.makehold');
});

Route::get('classdetails', function () {
    return view('admin.classdetails');
});

Route::get('bookvideoteacher', function () {
    return view('admin.bookvideoteacher');
});

Route::get('absence', function () {
    return view('admin.absence');
});

Route::get('attendance', function () {
    return view('admin.attendance');
});

Route::get('branch', function () {
    return view('admin.branch');
});

Route::get('branchlist', function () {
    return datatables()->of(\DB::table('branches')->select('*'))
        ->make(true);
})->name('branchlist');

Route::get('memberlist', function () {
    return datatables()->of(\DB::table('members')->select('*'))
        ->make(true);
})->name('memberlist');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
