<?php

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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');
    
    //šeit ir route, kas izveido URL katram pasūtījumam, ko nosūtīt piegādātājam
    
    Route::get('/orders/requestproducts/{order_id}', [
        'uses' => 'OrderController@getOrderSupplier',
        'as' => 'getordersupplier'
    ]);

    
    //šeit ir route, kas izveido URL katram pasūtījumam, ko nosūtīt par preču pieejamību precizēšanu klientam
    
    Route::get('/orders/requestpayment/{order_id}', [
        'uses' => 'OrderController@getOrderClient',
        'as' => 'getorderclient'
    ]);
    
    
    
    //šeit ir routes, kas veic reģistrēšānos admin sistēmai
    
    Route::post('/signup', [
        'uses' => 'IndexController@postSignUp',
        'as' => 'signup'
    ]);
    
    Route::get('/signup', [
        'uses' => 'IndexController@postSignUp',
        'as' => 'signup'
    ]);
    
    Route::get('/register', [
        'uses' => 'IndexController@getRegisterPage',
        'as' => 'register',
    ]);
    
    
    
    //šeit ir routes, kas nosūta preču pieprasījumu piegādātājam
    
    Route::post('/requestproducts/{order_id}', [
        'uses' => 'OrderController@requestProducts',
        'as' => 'requestproducts'
    ]);
    
    Route::get('/requestproducts/{order_id}', [
        'uses' => 'OrderController@requestProducts',
        'as' => 'requestproducts'
    ]);
    
    
    //šeit ir routes, kas preču pieprasījumā ieraksta DB piegādātāja sniegto info
    
    Route::post('/orders/requestproducts/productquantities/{product_id}', [
        'uses' => 'OrderController@postProductQuantities',
        'as' => 'postproductquantities'
    ]);
    
    Route::get('/orders/requestproducts/productquantities/{product_id}', [
        'uses' => 'OrderController@postProductQuantities',
        'as' => 'postproductquantities'
    ]);
    
    
    //šeit ir routes, kas nosūta preču atlikumus/ piegādes laikus un apmaksas pieprasījumu klientam
    
    Route::post('/requestpayment/{order_id}', [
        'uses' => 'OrderController@requestPayment',
        'as' => 'requestpayment'
    ]);
    
    Route::get('/requestpayment/{order_id}', [
        'uses' => 'OrderController@requestPayment',
        'as' => 'requestpayment'
    ]);
    
    
    
    //šeit ir routes priekš Voyager backoffice
    
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });

});


