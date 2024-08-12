<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\HiringManagerController;
use App\Http\Controllers\Admin\EmploymentTypeController;
use App\Http\Controllers\ProfileController;

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

//Profile
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

//Jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/create', [JobController::class, 'create'])->name('create-job');
Route::post('/jobs/store', [JobController::class, 'store'])->name('store-job');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('edit-job');

Route::get('/get-departments', [JobController::class, 'getDepartments'])->name('get-departments');
Route::get('/get-hiring-managers', [JobController::class, 'getHiringManagers'])->name('get-hiring-managers');
Route::get('/get-locations', [JobController::class, 'getLocations'])->name('get-locations');
Route::get('/get-employment-types', [JobController::class, 'getEmploymentTypes'])->name('get-employment-types');
Route::get('/get-workplace-types', [JobController::class, 'getWorkplaceTypes'])->name('get-workplace-types');
Route::get('/get-job-pipeline-stages', [JobController::class, 'getJobPipelineStages'])->name('get-job-pipeline-stages');
Route::get('/get-privacy-settings', [JobController::class, 'getPrivacySettings'])->name('get-privacy-settings');
Route::get('/department-exist', [JobController::class, 'departmentExist'])->name('department-exist');
Route::get('/jobs/{id}/details', [JobController::class, 'details'])->name('job-details');

//User Management
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('create-user');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit-user');

//Admin
Route::get('/admin/departments', [DepartmentController::class, 'index'])->name('admin.departments');
Route::get('/admin/hiring_managers', [HiringManagerController::class, 'index'])->name('admin.hiring_managers');


Route::get('/admin/employment_types', [EmploymentTypeController::class, 'index'])->name('admin.employment_types');
Route::delete('/employment_type/{id}/delete', [EmploymentTypeController::class, 'delete'])->name('employment_type.delete');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');