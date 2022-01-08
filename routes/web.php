<?php
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\LoginController;
use App\Http\Controllers\website\ShowstudentController;
use App\Http\Controllers\website\RoutineController as WebsiteRoutineController;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StudentsController;
use App\Http\Controllers\admin\teachersController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\RoutineController;
use App\Http\Controllers\admin\ExamController;
use App\Http\Controllers\admin\PaymentController;

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


//website

Route::get('/', function () {
  return redirect()->route('home');
});
Route::get('/website', function () {
    return view('website.layouts.home');
})->name('home');


Route::get('/website/home',[HomeController::class,'home'])->name('website.home');


//student signup
Route::get('/website/student',[ShowstudentController::class,'student'])->name('website.student.signup');
Route::post('/user/student/signup',[ShowstudentController::class,'studentSignup'])->name('user.student.signup');



//login & logout
Route::get('/user/login',[LoginController::class,'login'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');


//routine
Route::get('/website/routine',[websiteRoutineController::class,'routine'])->name('website.routine');






// Admin



//login

Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('/admin/dologin',[AdminLoginController::class,'dologin'])->name('admin.do.login');


Route::group(['middleware'=>['auth','admin']],function(){
  
  Route::get('/admin',function(){
    return view('admin.master');
  });
  
  
  
  Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

  //dashboard
    Route::get('/admin/dashboard',[DashboardController::class,'dash'])->name('admin.dashboard');
  
  
    //user
    Route::get('/admin/user/list',[UserController::class,'userList'])->name('admin.user.list');
    Route::get('/admin/user/accept/{user_id}',[UserController::class,'pending'])->name('admin.user.accept');

    Route::get('/admin/user/view/{user_id}',[UserController::class,'view'])->name('admin.user.view');
    Route::get('/admin/user/delete/{user_id}',[UserController::class,'delete'])->name('admin.user.delete');
    Route::get('/admin/user/edit/{user_id}',[UserController::class,'edit'])->name('admin.user.edit');
    Route::put('/admin/user/update/{user_id}',[UserController::class,'update'])->name('admin.user.update');

  
  
  
  
    //student
   Route::get('/admin/student',[StudentsController::class,'student'])->name('admin.student');
   Route::get('/admin/student/add',[StudentsController::class,'studentAdd'])->name('admin.student.add');
   Route::post('/admin/student/store',[StudentsController::class,'store'])->name('admin.student.store');
  
  
  
   //teacher
   Route::get('/admin/teacher',[TeachersController::class,'teacher'])->name('admin.teacher');
   Route::get('/admin/teacher/add',[TeachersController::class,'teacherAdd'])->name('admin.teacher.add');
   Route::post('/admin/teacher/store',[TeachersController::class,'store'])->name('admin.teacher.store');
  
  
   //subject
   Route::get('/admin/subject',[SubjectController::class,'subject'])->name('admin.subject');
   Route::get('/admin/subject/add',[SubjectController::class,'subjectAdd'])->name('admin.subject.add');
   Route::post('/admin/subject/store',[SubjectController::class,'store'])->name('admin.subject.store');
  
  
   //class
   Route::get('/admin/class',[ClassController::class,'class'])->name('admin.class');
   Route::get('/admin/class/add',[ClassController::class,'classAdd'])->name('admin.class.add');
   Route::post('/admin/class/store',[ClassController::class,'store'])->name('admin.class.store');
  
  
   //exam
   Route::get('/admin/exam',[ExamController::class,'exam'])->name('admin.exam');
   Route::get('/admin/exam/add',[ExamController::class,'examAdd'])->name('admin.exam.add');
   Route::post('/admin/exam/store',[ExamController::class,'store'])->name('admin.exam.store');
  
  
  //routine
   Route::get('/admin/routine',[RoutineController::class,'routine'])->name('admin.routine');
   Route::get('/admin/routine/add',[RoutineController::class,'routineAdd'])->name('admin.routine.add');
  Route::post('/admin/routine/store',[RoutineController::class,'store'])->name('admin.routine.store');
  
  
  
  //payment
   Route::get('/admin/payment',[PaymentController::class,'payment'])->name('admin.payment');
   Route::get('/admin/payment/add',[PaymentController::class,'paymentAdd'])->name('admin.payment.add');
   Route::post('/admin/payment/store',[PaymentController::class,'store'])->name('admin.payment.store');

});
