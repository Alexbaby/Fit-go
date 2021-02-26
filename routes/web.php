<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Courses\Courses;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('course', 'App\Http\Controllers\CourseController@index')->name('course');

Route::post('course/create', 'App\Http\Controllers\CourseController@createCourse')->name('course/create');

Route::delete('course/remove/{id}','App\Http\Controllers\CourseController@remove')->name('course/remove');

Route::get('user', 'App\Http\Controllers\CustomerController@index')->name('user');




