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
    Route::get('/','AdminPagesController@dashboard');
    // Route::get('/orders', function () {
    //     return view ('admin.orders.viewOrder');
    // });
    // Route::get('/order-detail', function () {
    //     return view ('admin.orders.viewOrderDetail');
    // });


    Route::get('/add-plan','PlanController@addPlan');
    Route::post('/add-plan','PlanController@addPlanPost');
    Route::get('/view-plans', 'PlanController@ViewPlan');
    Route::get('/view-plan-detail/{id}', 'PlanController@ViewPlanDetail');
    
    
    
    Route::get('/users', 'AdminUserController@viewUsers');
    Route::get('/view-user/{id}', 'AdminUserController@ViewUserDetail');
    
    
    
    Route::get('/calender', function () {
        return view ('admin.calender.Calender');
    });
    Route::get('/calender', 'CalenderController@adminCalender');
    
    
    
    Route::get('/subscriptions', 'SubscribeController@viewSubscriptions');
    Route::get('/view-subscription-detail/{id}', 'SubscribeController@ViewSubscribeDetail');
    
    

    
});



Route::get('/', 'HomeController@index')->name('home');
Route::get('/plans', 'HomeController@plans')->name('plans');
Route::get('/plan-detail/{id}', 'HomeController@planDetail')->name('plandetail');
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
Route::get('/wallet', 'HomeController@wallet')->name('wallet')->middleware('auth');
Route::get('/calender', 'HomeController@calender')->name('calender')->middleware('auth');
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe')->middleware('auth');
Route::post('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth');
Route::get('/confirmed', 'HomeController@confirmed')->name('confirmed')->middleware('auth');