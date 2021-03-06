<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Client\SubjectsDetailController;
use App\Http\Controllers\Client\CourseDetailController;
use App\Http\Controllers\Client\SignUpInController;
use App\Http\Controllers\Client\IntroduceController;
use App\Models\Course;
use App\Http\Controllers\Client\MyCourseController;
use App\Http\Controllers\Client\SignInController;

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

Route::get('/404',[HomeController::class,'Pages404'])->name('404');


Route::get('/authenticate/login',[UserController::class,'viewLogin'])->name('login_admin');
Route::post('/authenticate/login',[UserController::class,'login']);
Route::get('/authenticate/logout',[UserController::class,'logout'])->name('logout_admin');

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

    // Danh sách đăng ký khóa học
    Route::group(['prefix' => 'list-register'], function () {
        Route::get('/',[RegisInfoController::class, 'index'])->name('listRegis'); // trang khoa hoc admin
        Route::get('/create',[RegisInfoController::class, 'create'])->name('listRegis.create');
        Route::post('/create',[RegisInfoController::class, 'store']);
        Route::get('/{update}/edit',[RegisInfoController::class, 'update'])->name('listRegis.update');
        Route::post('/{update}/edit',[RegisInfoController::class, 'edit']);
        Route::get('/{update}',[RegisInfoController::class, 'destroy'])->name('listRegis.destroy');
        Route::get('/{update}/information',[RegisInfoController::class, 'information'])->name('listRegis.information'); // show modal người đăng ký
        Route::get('/{update}/mySubject',[RegisInfoController::class, 'mySubject'])->name('listRegis.mySubject'); // show modal khóa học
    });

    Route::group(['prefix' => 'account'], function () {
        Route::get('/',[UserController::class,'index'])->name('account');
        Route::get('/{account}',[UserController::class,'changeStatus']);
    });
});


//--------------------CLIENT-----------------------
Route::get('/',[HomeController::class, 'index'])->name('client');
Route::get('/chi-tiet-mon-hoc/{subjects}',[SubjectsDetailController::class, 'subjects'])->name('subjects'); //vào trang chi tiết môn học
Route::get('/dang-ki-mon-hoc/{subjects}',[SubjectsDetailController::class, 'regis_subjects'])->name('regis_subjects'); //vào trang chi tiết môn học
Route::get('/huy-dang-ki-mon-hoc/{subjects}',[SubjectsDetailController::class, 'cancel_regis_subjects'])->name('cancel_regis_subjects'); //vào trang chi tiết môn học
Route::get('/chi-tiet-khoa-hoc/{course}',[CourseDetailController::class, 'Course'])->name('Course'); //vào chi tiết từng khóa học
Route::get('/dang-ky-tai-khoan',[SignUpInController::class, 'SignUp'])->name('SignUp'); // view đăng ký tài khoản
Route::post('/dang-ky-tai-khoan',[SignUpInController::class, 'storeSignUp']); //đăng ký tài khoản
Route::post('/dang-nhap-tai-khoan',[SignInController::class, 'Login'])->name('login'); //đăng nhập tài khoản
Route::get('/dang-xuat-tai-khoan',[SignInController::class, 'Logout'])->name('logout'); //đăng xuất tài khoản

Route::get('/quen-mat-khau',[SignInController::class, 'viewForgotPassword'])->name('forgotPassword'); //quên mật khẩu
Route::post('/quen-mat-khau',[SignInController::class, 'sendCodeResetPassword']); //quên mật khẩu
Route::get('/dat-lai-mat-khau',[SignInController::class, 'resetPassword'])->name('get.link.reset.password');
Route::post('/dat-lai-mat-khau',[SignInController::class, 'changeNewPassword']);


Route::post('/cap-nhat-thong-tin-ca-nhan/{id}',[SignInController::class, 'update_infomation'])->name('update_infomation');


Route::get('/gioi-thieu',[IntroduceController::class, 'Introduce'])->name('Introduce');
Route::get('/khoa-hoc-cua-toi',[MyCourseController::class, 'MyCourse'])->name('MyCourse');
