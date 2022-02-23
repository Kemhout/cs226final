<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentInfoController;


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
    return view('dashboard');
});

Route::get('/add_students', [DashboardController::class, 'index']);
Route::post('/add_students', [StudentController::class, 'add_students']);
Route::get('/list_students', [StudentController::class, 'list_students']);
Route::get('/delete_students/{id}', [StudentController::class, 'delete_students']);
Route::get('/edit_students/{id}', [StudentController::class, 'edit_students']);
Route::post('/update_students/{id}', [StudentController::class, 'update_students']);

Route::get('/list_students_info/{id}', [StudentInfoController::class, 'list_students_info']);
Route::get('/add_students_info/{id}', [StudentInfoController::class, 'index']);
Route::post('/add_students_info/{id}', [StudentInfoController::class, 'add_students_info']);
Route::get('/edit_students_info/{id}', [StudentInfoController::class, 'edit_students_info']);
Route::get('/edited_students_info/{id}', [StudentInfoController::class, 'list_students_info']);
Route::post('/update_students_info/{id}', [StudentInfoController::class, 'update_students_info']);
Route::get('/delete_students_info/{id}', [StudentInfoController::class, 'delete_students_info']);
Route::redirect('/update_students_info/{id}', '/list_students_info/{id}');
// return redirect('/list_students_info/{id}'));