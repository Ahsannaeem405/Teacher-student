<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    UserController,
    LogoutController,
    AdminController,
    TeacherController,
    StudentController,
};

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
   return view('home5');
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







Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function(){

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('users', [AdminController::class, 'getUsers'])->name('users');
    Route::get('teachers', [AdminController::class, 'getTechers'])->name('teachers');

});


Route::group(['prefix' => 'teacher',  'as' => 'teacher.'], function(){

    Route::get('dashboard', [TeacherController::class, 'index'])->name('dashboard');
    Route::get('/price', function () {
        return view('teacher.price');
    });
});

Route::group(['prefix' => 'student', 'middleware' => 'auth', 'as' => 'student.'], function(){

    Route::get('dashboard', [StudentController::class, 'index'])->name('dashboard');
    Route::get('/price',[FrontController::class,'price']);
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

