<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Billing\Alipay;
use App\Billing\Wechat;

Route::get('/', function () {
    $alipay = new Wechat() ;
    //return view('welcome');
});
