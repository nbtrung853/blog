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

Route::get('/xin-chao/nguyenbaotrung', function () {
    return 'Xin Chào bạn';
});

route::get('/{ten}/{nam}/', function ($ten, $nam) {
    return 'Xin Chào bạn '.$ten. ' <br>năm sinh là: '.$nam;
});

route ::get('/conheo/{ten}/{nam?}/', function ($ten, $nam = '2003') {
    return 'Xin Chào bạn  '.$ten. ' <br>năm sinh là: '.$nam;
}) ->where(['ten' => '[a-zA-Z]+', 'nam' => '[0-9]+']);