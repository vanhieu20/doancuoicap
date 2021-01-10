<?php

namespace App\Providers;

use App\Models\Course;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Course $course)
    {
        $list_course = $course->get();
        \Illuminate\Support\Facades\View::share('list_course', $list_course);
    }
}
