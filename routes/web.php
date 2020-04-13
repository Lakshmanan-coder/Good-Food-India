<?php

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

Route::any('/login-redirect', 'AdminPagesController@loginRedirect');

Auth::routes();



Route::prefix('admin')->group(function () {
    Route::get('/','AdminPagesController@dashboard')->middleware('auth');
    // Route::get('/orders', function () {
    //     return view ('admin.orders.viewOrder');
    // });
    // Route::get('/order-detail', function () {
    //     return view ('admin.orders.viewOrderDetail');
    // });


    Route::get('/add-plan','PlanController@addPlan')->middleware('auth');
    Route::post('/add-plan','PlanController@addPlanPost')->middleware('auth');
    Route::get('/view-plans', 'PlanController@ViewPlan')->middleware('auth');
    Route::get('/view-plan-detail/{id}', 'PlanController@ViewPlanDetail')->middleware('auth');
    Route::get('/edit-plan-detail/{id}', 'PlanController@EditPlanDetail')->middleware('auth');
    Route::get('/delete-plan/{id}', 'PlanController@DeletePlanDetail')->middleware('auth');
    Route::post('/edit-plan-detail/{id}', 'PlanController@EditPlanDetailPost')->middleware('auth');
    Route::get('/delete-plan-picture/{id}','PlanController@deletePlanPicture')->middleware('auth');
    Route::get('/delete-menu-item/{id}','PlanController@deleteMenuItem')->middleware('auth');
    
    
    
    Route::get('/users', 'AdminUserController@viewUsers')->middleware('auth');
    Route::get('/view-user/{id}', 'AdminUserController@ViewUserDetail')->middleware('auth');
    
    
    
    Route::get('/calender', 'CalenderController@adminCalender')->middleware('auth');
    
    
    
    Route::get('/subscriptions', 'SubscribeController@viewSubscriptions')->middleware('auth');
    Route::get('/view-subscription-detail/{id}', 'SubscribeController@ViewSubscribeDetail')->middleware('auth');
    
    

    
});



Route::get('/', 'HomeController@index')->name('home');
Route::get('/plans', 'HomeController@plans')->name('plans');
Route::get('/plan-detail/{id}', 'HomeController@planDetail')->name('plandetail');
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
Route::post('/profile', 'HomeController@EditProfile')->name('profilePost')->middleware('auth');
Route::post('/edit-days', 'HomeController@EditDays')->name('profilePost')->middleware('auth');
Route::get('/wallet', 'HomeController@wallet')->name('wallet')->middleware('auth');
Route::get('/calender', 'CalenderController@usercalender')->name('calender')->middleware('auth');
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe')->middleware('auth');
Route::post('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth');
Route::get('/confirmed', 'HomeController@confirmed')->name('confirmed')->middleware('auth');