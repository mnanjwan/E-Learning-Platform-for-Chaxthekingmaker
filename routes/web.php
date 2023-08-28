<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/test', 'Website\HomePageController@test');

Route::get('/', 'Website\HomePageController@home')->name('home');
Route::get('/mentorship', 'Website\MentorshipPageController@index')->name('mentorship');
Route::get('/faq', 'Website\FaqPageController@index')->name('faq');
Route::get('/course', 'Website\CoursePageController@index')->name('course');
Route::get('/contact', 'Website\ContactPageController@index')->name('contact');
#checkout
Route::get('/mentorship/checkout/{price}/{mentorship}', 'Website\CheckoutPageController@index')->name('checkout');
Route::post('/checkout/{price}/{mentorship}', 'Website\CheckoutPageController@checkout_process')->name('checkout-process');
Route::get('/checkout/payment/{order_id}', 'Website\PaymentPageController@index')->name('payment');
#Referrals 
Route::post('/checkout/{price}/ref/{id}/{mentorship}', 'Website\ReferralPageController@store')->name('referral.checkout.process');
Route::get('/mentorship/ref/{id}', 'Website\ReferralPageController@index')->name('register');
Route::get('/mentorship/checkout/{price}/ref/{id}', 'Website\ReferralPageController@register')->name('referral.checkout.page');

#User Auth
Route::get('/user/login', 'User\Auth\LoginController@index')->name('user-login-page');
Route::post('/login', 'User\Auth\LoginController@loginAction')->name('user-login');

Route::prefix('user')->group(function () {
    Route::get('/dashboard', 'User\Dashboard\DashboardController@index')->name('dashboard');
    Route::get('/profile', 'User\Profile\ProfileController@index')->name('profile');

    #course
    Route::get('/courses', 'User\Course\CourseController@index')->name('courses');
    Route::get('/lesson/beginner/{id}', 'User\Lesson\BeginnerController@index')->name('beginner.lesson');
    Route::get('/lesson/intermediate/{id}', 'User\Lesson\IntermediateController@index')->name('intermediate.lesson');
    Route::get('/lesson/advance/{id}', 'User\Lesson\AdvanceController@index')->name('advance.lesson');

    Route::get('/lesson/lesson', 'User\Lesson\AdvanceController@lesson')->name('lesson');


    #withdrawl
    Route::get('/withdraw', 'User\Withdraw\WithdrawController@index')->name('user.withdraw');
    Route::post('/withdraw/process', 'User\Withdraw\WithdrawController@process')->name('user.withdraw.process');

    Route::get('/referrals', 'User\Referral\ReferralController@index')->name('user.referral');
    Route::get('/transaction/history', 'User\Transaction\TransactionController@index')->name('transaction.history');
    Route::get('/logout', 'User\Auth\LogoutController@logout')->name('user-logout');
});

#Admin Auth
Route::get('/chaxadmin/login', 'Admin\Auth\LoginController@index')->name('admin-login-page');
Route::post('/admin/login', 'Admin\Auth\LoginController@loginAction')->name('admin-login');

Route::prefix('chaxadmin')->group(function () {
    Route::get('/dashboard', 'Admin\Dashboard\DashboardController@index')->name('admin.dashboard');

    #Earnings
    Route::get('/earnings', 'Admin\Earnings\EarningsController@index')->name('admin.earnings');

    #Users
    Route::get('/user', 'Admin\User\UserController@index')->name('admin.user');
    Route::get('/user/pending', 'Admin\User\ApproveUserController@index')->name('admin.user.pending');

    #transaction
    Route::get('/transaction/{order_id}', 'Admin\User\ApproveUserController@approve')->name('approve.user.transaction'); //Approve user
    Route::get('/transaction', 'Admin\Transaction\TransactionController@payment')->name('admin.user.transaction'); 
    Route::get('/withdraw', 'Admin\Transaction\WithdrawController@withdraw')->name('admin.user.withdrawal'); 
    Route::get('/transaction/withdrawal/{transaction_id}', 'Admin\Transaction\WithdrawController@approve')->name('admin.user.withdraw.process'); 

    #Referrals
    Route::get('/referrals', 'Admin\Referral\ReferralController@index')->name('admin.user.referral');

    #Course
    Route::get('/course', 'Admin\Course\CourseController@index')->name('admin.course');
    Route::get('/course/lesson', 'Admin\Course\UploadController@index')->name('admin.course.add');
    Route::post('/course/lesson/post', 'Admin\Course\UploadController@upload')->name('admin.course.add.post');

    #Lesson
    Route::get('/course', 'Admin\Course\CourseController@index')->name('admin.course');



    Route::get('/logout', 'Admin\Auth\LogoutController@logout')->name('admin-logout');
});
