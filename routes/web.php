<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
    Route::get('/course',[CourseController::class, 'index']); // trang danh muc khoa hoc admin
});


//--------------------CLIENT-----------------------
Route::get('/',[HomeController::class, 'index']);
