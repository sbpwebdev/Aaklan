<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\WhatsAppController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\OrganizationTypeController;
use App\Http\Controllers\StudentTypeController;
use App\Http\Controllers\StaffTypeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\Admin\RoleController;


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
Route::resource('organizations', OrganizationController::class);

Route::resource('students', StudentController::class);

Route::resource('staffs', StaffController::class);

Route::resource('grades', GradeController::class);
Route::resource('OrganizationTypes', OrganizationTypeController::class);
Route::resource('StudentTypes', StudentTypeController::class);
Route::resource('StaffTypes', StaffTypeController::class);
Route::resource('levels', LevelController::class);
Route::resource('admin/roles', RoleController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-whatsapp', [WhatsAppController::class, 'sendWhatsAppMessage']);

Route::get('/admin/home', [HomeController::class, 'myAdminHome']);


Route::get('/admin/courses', [CoursesController::class, 'list']);
Route::get('/admin/courses/add', [CoursesController::class, 'add']);


