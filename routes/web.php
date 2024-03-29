<?php
use App\Http\Controllers\ChatController;
use App\Http\Controllers\{
    Admin\AdminController,
    LogoutController,
    StudentDashboardController,
    TeacherDashboardController,
    ImageController,
    MainBlogController,
    ContactController
};

use App\Http\Controllers\Admin\{
    TeacherController,
    StudentController,
    SubscriptionController,
    AdminContactController
};
use App\Http\Controllers\TeachersPanel\{
    CreateClassController,
    CreateCourseController,
    MyProfileController,
    BlogController,
    ZipController,
    History,
    Withdraw
};

use App\Http\Controllers\FrontController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\WebrtcStreamingController;





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

Route::get('/cls', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        $run = Artisan::call('view:clear');

        Session::flush();
        return 'FINISHED';
    });


Route::get( '/images/{path}/{ext}', [ ImageController::class, 'index' ] )
    ->name( 'imagepath' );

Route::get('/test', function (){
   return view('home2');
});

Route::get('/testing', function (){
   return view('contact');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('user-login');

Route::get('/forgot/password', function (){
   return view('auth.passwords.email');
})->name('forgot-password');


Route::get('/zoom', function () {
    return view('zoom');
})->name('zoom');

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('register/here', function (){
    return view('auth.register');
})->name('user-reg');
// user routes
Route::get('/price', function () {
    return view('user.price');
});

Route::get('/my/blogs', [BlogController::class, 'Blogs'])
    ->name('my-blogs');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check_admin'], 'as' => 'admin.'], function(){

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/myprofile', [AdminController::class, 'myProfile'])->name('my-profile');
    Route::post('/profile/update', [AdminController::class,'profileUpdate'])
                                                        ->name('update-profile');
    Route::resources([
            'teacher' => TeacherController::class
        ], ['except'=>['destroy']

    ]);
    Route::post('/update/teacher', [TeacherController::class, 'updateTeacher'])
        ->name('updateTeacher');
    Route::get('/tech/delete/{id}', [TeacherController::class, 'delete'])
        ->name('teacher-delete');

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

    Route::get('/contact', [AdminContactController::class, 'index'])
        ->name('contact');
    Route::get('/view/request/{id}', [AdminContactController::class, 'singleRequest'])
        ->name('view-request');
    Route::get('/delete/request/{id}', [AdminContactController::class, 'deleteSingleRequest'])
        ->name('delete-request');
    Route::get('/withdraw/requests', [AdminController::class, 'withdrawRequests'])
        ->name('withdraw-requests');
    Route::get('/request/status/{status}/{id}', [AdminController::class, 'withdrawRequestStatus'])
        ->name('request-status');
    Route::post('/payment/withdraw', [AdminController::class, 'paymentWithdraw'])
        ->name('payment-withdraw');
});

Route::get('/chat', [ChatController::class, 'chat'])->name('chat')
                                                    ->middleware('auth');
Route::post('/chat/store', [ChatController::class, 'storeChat'])
                                                ->name('store-chats')
                                                ->middleware('auth');

Route::group(['prefix' => 'teacher', 'middleware' => ['auth', 'check_teacher'], 'as' => 'teacher.'], function(){

        Route::get('dashboard', [TeacherDashboardController::class, 'index'])->name('dashboard');
        Route::get('/my/profile', [TeacherDashboardController::class, 'myProfile'])->name('myProfile');
        Route::get('/course/create', [TeacherDashboardController::class, 'createCourse'])->name('create-course')->middleware('check_subscription');
        Route::get('/courses', [TeacherDashboardController::class, 'myCourse'])->name('my-courses');
        Route::get('/my-students', [TeacherDashboardController::class, 'myStudents'])->name('my-students');
        Route::get('/pricing/menu', [TeacherDashboardController::class, 'priceMenu'])->name('price-menu');
        Route::get('/trial/menu/{type}', [TeacherDashboardController::class, 'trialMenu'])->name('trial-menu');
        Route::get('/payment/type/{type}', [TeacherDashboardController::class, 'paymentType'])->name('payment-type');
        Route::post('/payment/submission', [TeacherDashboardController::class, 'paymentSubmission'])->name('payment-submission');
        Route::get('/course/detail/{id}', [TeacherDashboardController::class, 'courseDetail'])->name('course-detail');
        Route::get('/notes', [TeacherDashboardController::class, 'notes'])->name('t-notes');
        Route::get('/notes/create', [TeacherDashboardController::class, 'createNotes'])->name('create-notes');
        Route::post('/add_note', [TeacherDashboardController::class, 'storeNotes'])->name('store-notes');
        Route::get('/delete_note/{id}', [TeacherDashboardController::class, 'deleteNotes'])->name('delete-notes');
        Route::get('/edit_note/{id}', [TeacherDashboardController::class, 'editNotes']);
        Route::post('/update/note/{id}', [TeacherDashboardController::class, 'updateNotes'])->name('update-note');
        Route::get('/create/notes', [TeacherDashboardController::class, 'createNotes'])->name('create-notes');
        Route::get('/create/blog', [TeacherDashboardController::class, 'createBlog'])->name('create-blog');
        Route::get('/create/class', [TeacherDashboardController::class, 'createClass'])->name('create-class')->middleware('check_subscription');
        Route::get('/upload/profile', [TeacherDashboardController::class, 'uploadProfile'])->name('upload-profile');

        Route::post('/profile/update', [MyProfileController::class, 'update'])
            ->name('profile-update');
        Route::get('/profile/del/{id}', [MyProfileController::class, 'delete'])
            ->name('profile-del');

        Route::get('/delClass', [CreateClassController::class, 'delete'])
            ->name('createClass-del');
        Route::resources([
            'createClass' => CreateClassController::class,
            'createCourse' => CreateCourseController::class,
            'blog' => BlogController::class
        ], ['except'=>['destroy']
        ]);
        Route::get('/delete/course', [CreateCourseController::class, 'deleteCourse'])
                                                         ->name('course-delete');
        Route::post('/course/video', [CreateCourseController::class, 'courseVideo'])
            ->name('course-video');
        Route::any('subscribe/plan', [StripePaymentController::class, 'stripe'])->name('subscribe-plan');
        Route::post('tech_stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
        Route::get('/delete/blog', [BlogController::class, 'deleteBlog'])
                                                          ->name('blog-delete');

        Route::post('/charge', [PaymentController::class, 'charge']);
        Route::get('/status', [TeacherDashboardController::class, 'status'])
                                                        ->name('status');
        Route::post('update/lec', [CreateCourseController::class, 'updateLecture'])
            ->name('update-lec');
        Route::get('/delete/lecture', [CreateCourseController::class, 'deleteLecture'])
                                                         ->name('lec-delete');

        Route::post('/find_class', [Teacher::class, 'find_class']);
        Route::post('/find_course', [Teacher::class, 'teacherFindCourse']);
        Route::post('/find_student', [Teacher::class, 'teacherFindStudent']);
        Route::post('/find_notes', [Teacher::class, 'teacherFindNotes']);
        Route::get('/meeting', [Teacher::class, 'meeting']);

        Route::get('/create_meeting', [Teacher::class, 'create_meeting']);
        Route::post('/save_meeting', [Teacher::class, 'save_meeting']);
        Route::get('/history', [History::class, 'history'])
            ->name('history');
        Route::get('history/delete',[History::class, 'deletehistory']);
        Route::get('/withdraw', [Withdraw::class, 'index'])->name('withdraw');
        Route::post('/withdraw/payment', [Withdraw::class, 'withdrawPayment'])
                                                       ->name('withdraw-payment');
        Route::post('/upload/vids', [CreateCourseController::class, 'uploadTeachVids'])
            ->name('vids-upload');
});

Route::group(['prefix' => 'student', 'middleware' => ['auth', 'check_student'], 'as' => 'student.'], function(){

        Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
        Route::get('/my-profile', [StudentDashboardController::class, 'myProfile'])->name('my-profile');
        Route::get('/history', [StudentDashboardController::class, 'history'])->name('history');
        Route::get('/notes', [StudentDashboardController::class, 'notes'])->name('notes');
        Route::get('/notes/create', [StudentDashboardController::class, 'createNotes'])->name('create-notes');
        Route::post('/add_note', [StudentDashboardController::class, 'storeNotes'])->name('store-notes');
        Route::get('/delete_note', [StudentDashboardController::class, 'deleteNotes'])->name('delete-notes');
        Route::get('/edit_note/{id}', [StudentDashboardController::class, 'editNotes']);
        Route::post('/update_note/{id}', [StudentDashboardController::class, 'updateNotes']);
        Route::get('/chat', [StudentDashboardController::class, 'chat'])->name('chat');
        Route::get('/price/menu', [StudentDashboardController::class, 'priceMenu'])->name('price-menu');
        Route::get('/courses', [StudentDashboardController::class, 'courses'])->name('courses');
        Route::get('/my/courses', [StudentDashboardController::class, 'myCourses'])->name('my-courses');
        Route::get('/course/detail', [StudentDashboardController::class, 'courseDetail'])->name('course-detail');
        Route::get('/course/detail/{id}', [StudentDashboardController::class, 'courseDetail']);
        Route::get('/course/cart/{id}/{teach_id}', [StudentDashboardController::class, 'courseCart'])->name('add-to-cart');
        Route::get('/payment/type/{id}/{class_id}/{teach_id}', [StudentDashboardController::class, 'paymentType'])->name('payment-type');
        Route::get('/edit/class/{id}', [StudentDashboardController::class, 'editClass'])
                                                                ->name('edit-class');
        Route::get('/detail/class/{id}', [StudentDashboardController::class, 'classDetail'])
                                                                   ->name('detail-class');
        Route::get('/delete/class', [StudentDashboardController::class, 'deleteClass'])
                                                                    ->name('delete-class');
        Route::get('/change/password', [StudentDashboardController::class, 'changePassword'])
                            ->name('change-password');
        Route::get('/my/status', [StudentDashboardController::class, 'myStatus'])
                                                        ->name('my-status');

        //teacher timeline
        Route::get('/teacher/timeline', [StudentDashboardController::class, 'teacherTimeline'])->name('teacher-timeline');
//        Route::get('/teacher/profile', [StudentDashboardController::class, 'teacherProfile'])->name('teacher-profile');
        Route::get('/teacher/profile/{id}', [StudentDashboardController::class, 'teachercourses'])->name('teacher-profile');
        Route::post('/teacher/rating', [StudentDashboardController::class, 'rating'])
                                                            ->name('rate-teacher');
        Route::get('/course_detail/{id}', [StudentDashboardController::class, 'teachercourseDetail'])->name('course-detail');
        Route::post('add_cart', [StudentDashboardController::class, 'addCart']);
        Route::get('/delete_cart', [StudentDashboardController::class, 'deleteCart']);
        Route::post('subscribe/plan', [StripePaymentController::class, 'studentstripe'])->name('subscribe-plan');
        Route::post('stripe', [StripePaymentController::class, 'stripestudentPost'])->name('stripe.post');
        Route::post('/profile/update', [MyProfileController::class, 'update'])
        ->name('profile-update');
        Route::get('delete_history',[StudentDashboardController::class, 'deletehistory']);
        Route::post('/charge', [PaymentController::class, 'stdcharge']);

        Route::post('/find_class', [Teacher::class, 'studentFindClass']);
        Route::post('/find_course', [Teacher::class, 'studentFindCourses']);
        Route::post('/find_my_course', [Teacher::class, 'studentFindMyCourses']);
        Route::post('/find_notes', [Teacher::class, 'studentFindNotes']);
        Route::get('/meeting', [Teacher::class, 'meeting']);

        Route::get('/create_meeting', [Teacher::class, 'create_meeting']);
        Route::post('/save_meeting', [Teacher::class, 'save_meeting']);
        //Route::post('/find_teacher', [Teacher::class, 'studentFindTeacher']);

});

Route::post('create/blog/post', [BlogController::class, 'storeBlog'])->name('blog-create');
Route::post('/reset/password', [MyProfileController::class, 'resetPassword'])
                                            ->name('reset-password');
Route::get('/change/password', [TeacherDashboardController::class, 'changePassword'])
                                            ->name('change-password');

Route::get('/zip/{name}', [ZipController::class, 'zipFile']);
        Route::get('/meeting', [Teacher::class, 'std_meeting']);

Route::post('/main_find_course', [Teacher::class, 'mainFindCourse']);

Route::get('/zip/{name}/{live}', [ZipController::class, 'zipFile'])
    ->name('zip-file');

//broadcasting
Route::get('/streaming', [WebrtcStreamingController::class, 'index']);
Route::get('/streaming/{streamId}', [WebrtcStreamingController::class, 'consumer']);
Route::post('/stream-offer', [WebrtcStreamingController::class, 'makeStreamOffer']);
Route::post('/stream-answer', [WebrtcStreamingController::class, 'makeStreamAnswer']);



Route::get('/',[FrontController::class,'index']);
Route::get('/blog/detail/{id}',[MainBlogController::class,'blogDetail'])
                                                        ->name('blog-detail');

//user main view
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'storeContact'])
                                                    ->name('contact');

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




        Route::get('success', [PaymentController::class, 'success']);
        Route::get('success2', [PaymentController::class, 'success2']);



    Route::get('/streaming', [WebrtcStreamingController::class, 'index']);
    Route::get('/streaming/{streamId}', [WebrtcStreamingController::class, 'consumer']);
    Route::post('/stream-offer', [WebrtcStreamingController::class, 'makeStreamOffer']);
    Route::post('/stream-answer', [WebrtcStreamingController::class, 'makeStreamAnswer']);
