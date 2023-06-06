<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AllviewController;

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
Route::get('/employees', [EmployeesController::class, 'employees'])->name('employees');
Route::get('/departments', [DepartmentController::class, 'departments'])->name('departments');
Route::get('/Allview', [AllviewController::class, 'Allview'])->name('Allview');


