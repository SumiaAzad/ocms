<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\SubjectController;
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
 Route::get('/admin/student',[StudentsController::class,'student'])->name('admin.student');
 Route::get('/admin/student/add',[StudentsController::class,'studentAdd'])->name('admin.student.add');
 Route::post('/admin/student/store',[StudentsController::class,'store'])->name('admin.student.store');
 Route::get('/admin/teacher',[TeachersController::class,'teacher'])->name('admin.teacher');
 Route::get('/admin/teacher/add',[TeachersController::class,'teacherAdd'])->name('admin.teacher.add');
 Route::post('/admin/teacher/store',[TeachersController::class,'store'])->name('admin.teacher.store');
 Route::get('/admin/subject',[SubjectController::class,'subject'])->name('admin.subject');
 Route::get('/admin/subject/add',[SubjectController::class,'subjectAdd'])->name('admin.subject.add');
 Route::post('/admin/subject/store',[SubjectController::class,'store'])->name('admin.subject.store');
 Route::get('/admin/class',[ClassController::class,'class'])->name('admin.class');
 Route::get('/admin/class/add',[ClassController::class,'classAdd'])->name('admin.class.add');
 Route::post('/admin/class/store',[ClassController::class,'store'])->name('admin.class.store');
 Route::get('/admin/exam',[ExamController::class,'exam'])->name('admin.exam');
 Route::get('/admin/exam/add',[ExamController::class,'examAdd'])->name('admin.exam.add');
 Route::post('/admin/exam/store',[ExamController::class,'store'])->name('admin.exam.store');
 Route::get('/admin/payment',[PaymentController::class,'payment'])->name('admin.payment');
 Route::get('/admin/payment/add',[PaymentController::class,'paymentAdd'])->name('admin.payment.add');
 Route::post('/admin/payment/store',[PaymentController::class,'store'])->name('admin.payment.store');