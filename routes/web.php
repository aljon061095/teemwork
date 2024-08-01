<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');

//Jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/create', [JobController::class, 'create'])->name('create-job');
Route::get('/get-departments', [JobController::class, 'getDepartments'])->name('get-departments');
Route::get('/get-hiring-managers', [JobController::class, 'getHiringManagers'])->name('get-hiring-managers');
Route::get('/get-locations', [JobController::class, 'getLocations'])->name('get-locations');
Route::get('/get-employment-types', [JobController::class, 'getEmploymentTypes'])->name('get-employment-types');
Route::get('/department-exist', [JobController::class, 'departmentExist'])->name('department-exist');

//User Management
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('create-user');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit-user');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');