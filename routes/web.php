<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[DashboardController::class, 'index']); // trang chur admin
    Route::group(['prefix' => 'course'], function () {
        Route::get('/',[CourseController::class, 'index'])->name('course'); // trang danh muc khoa hoc admin
        Route::get('/create',[CourseController::class, 'create'])->name('course.create');
        Route::post('/create',[CourseController::class, 'store']);
        Route::get('/{update}/edit',[CourseController::class, 'update'])->name('course.update');
        Route::post('/{update}/edit',[CourseController::class, 'edit']);
        Route::get('/{update}',[CourseController::class, 'destroy'])->name('course.destroy');
    });
});


//--------------------CLIENT-----------------------
Route::get('/',[HomeController::class, 'index']);
