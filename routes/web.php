<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PaymentController;
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
    return view('admin.master');
});
  Route::get('/admin/dashboard',[DashboardController::class,'dash'])->name('admin.dashboard');
 Route::get('/admin/student',[StudentsController::class,'Student'])->name('admin.student');
 Route::get('/admin/student/add',[StudentsController::class,'StudentAdd'])->name('admin.student.add');
 Route::post('/admin/student/store',[StudentsController::class,'store'])->name('admin.student.store');
 Route::get('/admin/teacher',[TeachersController::class,'teacher'])->name('admin.teacher');
 Route::get('/admin/course',[CourseController::class,'course'])->name('admin.course');
 Route::get('/admin/class',[ClassController::class,'class'])->name('admin.class');
 Route::get('/admin/exam',[ExamController::class,'exam'])->name('admin.exam');
 Route::get('/admin/payment',[PaymentController::class,'payment'])->name('admin.payment');