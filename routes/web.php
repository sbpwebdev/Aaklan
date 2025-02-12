<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\WhatsAppController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
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

Route::post('/send-whatsapp', [WhatsAppController::class, 'sendWhatsAppMessage']);

Route::get('/admin/home', [HomeController::class, 'myAdminHome']);


Route::get('/admin/organization', [OrganizationController::class, 'index']);
Route::get('/admin/organization/add', [OrganizationController::class, 'add']);
//Route::post('/admin/organization/store', [OrganizationController::class, 'store']);
Route::post('/admin/organization/store', [OrganizationController::class, 'store']);

Route::get('/admin/student', [StudentController::class, 'list']);
Route::get('/admin/student/add', [StudentController::class, 'add']);


Route::get('/admin/courses', [CoursesController::class, 'list']);
Route::get('/admin/courses/add', [CoursesController::class, 'add']);


