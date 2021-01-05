<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Models\Course;

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

// Route::get('/', function () {
//     return view('admins.course.index');
// });


//-------------------ADMIN-------------------------

//Login

Route::get('/authenticate/login',[UserController::class,'viewLogin'])->name('login');
Route::post('/authenticate/login',[UserController::class,'login']);
Route::get('/authenticate/logout',[UserController::class,'logout'])->name('logout');

Route::group(['prefix' => 'admin','middleware' => 'CheckLogin'], function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard'); // trang chur admin
    //danh mục khóa học
    Route::group(['prefix' => 'course'], function () {
        Route::get('/',[CourseController::class, 'index'])->name('course'); // trang danh muc khoa hoc admin
        Route::get('/create',[CourseController::class, 'create'])->name('course.create');
        Route::post('/create',[CourseController::class, 'store']);
        Route::get('/{update}/edit',[CourseController::class, 'update'])->name('course.update');
        Route::post('/{update}/edit',[CourseController::class, 'edit']);
        Route::get('/{update}',[CourseController::class, 'destroy'])->name('course.destroy');
    });


	// khóa học
    Route::group(['prefix' => 'subject'], function () {
        Route::get('/',[SubjectController::class, 'index'])->name('subject'); // trang danh muc khoa hoc admin
        Route::get('/create',[SubjectController::class, 'create'])->name('subject.create');
        Route::post('/create',[SubjectController::class, 'store']);
        Route::get('/{update}/edit',[SubjectController::class, 'update'])->name('subject.update');
        Route::post('/{update}/edit',[SubjectController::class, 'edit']);
        Route::get('/{update}',[SubjectController::class, 'destroy'])->name('subject.destroy');
    });

    // khóa học
    Route::group(['prefix' => 'list-register'], function () {
        Route::get('/',[RegisInfoController::class, 'index'])->name('listRegis'); // trang danh muc khoa hoc admin
        Route::get('/create',[RegisInfoController::class, 'create'])->name('listRegis.create');
        Route::post('/create',[RegisInfoController::class, 'store']);
        Route::get('/{update}/edit',[RegisInfoController::class, 'update'])->name('listRegis.update');
        Route::post('/{update}/edit',[RegisInfoController::class, 'edit']);
        Route::get('/{update}',[RegisInfoController::class, 'destroy'])->name('listRegis.destroy');
    });
});


//--------------------CLIENT-----------------------
Route::get('/',[HomeController::class, 'index']);
