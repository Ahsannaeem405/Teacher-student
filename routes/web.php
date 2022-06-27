<?php

use App\Http\Controllers\{
    Admin\AdminController,
    LogoutController,
    StudentDashboardController,
    TeacherDashboardController,
};

use App\Http\Controllers\Admin\{
    TeacherController,
    StudentController,
    SubscriptionController
};
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StripePaymentController;
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

Route::get('/test', function (){
   return view('home2');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('register/here', function (){
    return view('auth.register');
});
// user routes
Route::get('/price', function () {
    return view('user.price');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check_admin'], 'as' => 'admin.'], function(){

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/myprofile', [AdminController::class, 'myProfile'])->name('my-profile');
    Route::post('/profile/update', [AdminController::class,'profileUpdate'])
                                                        ->name('update-profile');
    Route::post('/update/teacher', [TeacherController::class, 'updateTeacher'])
                                                     ->name('updateTeacher');
    Route::get('/tech/delete/{id}', [TeacherController::class, 'delete'])
                                                     ->name('teacher-delete');
    Route::resources([
            'teacher' => TeacherController::class
        ], ['except'=>['destroy']

    ]);

    Route::resources([
        'student' => StudentController::class
    ], ['except'=>['destroy']

    ]);
    Route::post('/update/student', [StudentController::class, 'updateStudent'])
                                                    ->name('updateStudent');
    Route::get('/std/delete/{id}', [StudentController::class, 'delete'])
                                         ->name('studentDelete');

    Route::get('/subscription', [SubscriptionController::class, 'index'])
                                                ->name('subscriptions');
    Route::post('/update/subscription', [SubscriptionController::class, 'updateSubscription'])
        ->name('updateSubscription');
    Route::get('/delete/{id}', [SubscriptionController::class, 'delete'])
        ->name('subscription-delete');


});


Route::group(['prefix' => 'teacher', 'middleware' => ['auth', 'check_teacher'], 'as' => 'teacher.'], function(){

        Route::get('dashboard', [TeacherDashboardController::class, 'index'])->name('dashboard');
        Route::get('/my/profile', [TeacherDashboardController::class, 'myProfile'])->name('myProfile');
        Route::get('/course/create', [TeacherDashboardController::class, 'createCourse'])->name('create-course');
        Route::get('/courses', [TeacherDashboardController::class, 'myCourse'])->name('my-courses');
        Route::get('/my-students', [TeacherDashboardController::class, 'myStudents'])->name('my-students');
        Route::get('/pricing/menu', [TeacherDashboardController::class, 'priceMenu'])->name('price-menu');
        Route::get('/payment/type', [TeacherDashboardController::class, 'paymentType'])->name('payment-type');
        Route::post('/payment/submission', [TeacherDashboardController::class, 'paymentSubmission'])->name('payment-submission');
        Route::get('/course/detail', [TeacherDashboardController::class, 'courseDetail'])->name('course-detail');
        Route::get('/notes', [TeacherDashboardController::class, 'notes'])->name('t-notes');
        Route::get('/create/notes', [TeacherDashboardController::class, 'createNotes'])->name('create-notes');
        Route::get('/create/blog', [TeacherDashboardController::class, 'createBlog'])->name('create-blog');
        Route::get('/create/class', [TeacherDashboardController::class, 'createClass'])->name('create-class');
        Route::get('/upload/profile', [TeacherDashboardController::class, 'uploadProfile'])->name('upload-profile');
        Route::get('/status', [TeacherDashboardController::class, 'status'])->name('status');
        Route::get('/change/password', [TeacherDashboardController::class, 'changePassword'])->name('change-password');

});

Route::group(['prefix' => 'student', 'middleware' => ['auth', 'check_student'], 'as' => 'student.'], function(){

        Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
        Route::get('/my-profile', [StudentDashboardController::class, 'myProfile'])->name('my-profile');
        Route::get('/history', [StudentDashboardController::class, 'history'])->name('history');
        Route::get('/notes', [StudentDashboardController::class, 'notes'])->name('notes');
        Route::get('/notes/create', [StudentDashboardController::class, 'createNotes'])->name('create-notes');
        Route::get('/chat', [StudentDashboardController::class, 'chat'])->name('chat');
        Route::get('/price/menu', [StudentDashboardController::class, 'priceMenu'])->name('price-menu');
        Route::get('/teacher/timeline', [StudentDashboardController::class, 'teacherTimeline'])->name('teacher-timeline');
        Route::get('/course/detail', [StudentDashboardController::class, 'courseDetail'])->name('course-detail');
        Route::get('/course/cart', [StudentDashboardController::class, 'courseCart'])->name('add-to-cart');
        Route::get('/payment/type', [StudentDashboardController::class, 'paymentType'])->name('payment-type');

});


Route::get('/',[FrontController::class,'index']);


Route::get('subscribe_plan', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
//user main view
Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/student-dashboard', function () {
    return view('home3');
});
Route::get('/dhome3', function () {
    return view('dhome3');
});
Route::get('/home4', function () {
    return view('home4');
});
Route::get('/teacher/profile', function () {
    return view('home5');
})->name('test');


Route::get('/home7', function () {
    return view('home7');
});
Route::get('/home8', function () {
    return view('home8');
});
Route::get('/home9', function () {
    return view('home9');
});
Route::get('/home10', function () {
    return view('home10');
});
Route::get('/home11', function () {
    return view('home11');
});
Route::get('/rating', function () {
    return view('rating');
});


Route::get('/term', function () {
    return view('term_condition');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog_detail', function () {
    return view('blog_detail');
});

