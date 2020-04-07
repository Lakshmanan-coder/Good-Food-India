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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/','AdminPagesController@dashboard');
    Route::get('/orders', function () {
        return view ('admin.orders.viewOrder');
    });
    Route::get('/order-detail', function () {
        return view ('admin.orders.viewOrderDetail');
    });


    Route::get('/add-plan','PlanController@addPlan');
    Route::post('/add-plan','PlanController@addPlanPost');
    Route::get('/view-plans', function () {
        return view ('admin.plans.ViewPlans');
    });
    Route::get('/view-plan-detail', function () {
        return view ('admin.plans.ViewPlanDetail');
    });



    Route::get('/users', 'AdminUserController@viewUsers');
    Route::get('/view-user/{id}', 'AdminUserController@ViewUserDetail');



    Route::get('/calender', function () {
        return view ('admin.calender.Calender');
    });



    Route::get('/subscriptions', function () {
        return view ('admin.subscriptions.ViewSubscriptions');
    });
    Route::get('/view-subscription-detail', function () {
        return view ('admin.subscriptions.ViewSubscriptionDetail');
    });

    Route::get('/password','AdminPagesController@password');


    
});