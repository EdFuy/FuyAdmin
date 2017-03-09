<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//超级后台路由
Route::group(['prefix'=>'admin'],function(){
    Route::get('/','Admin\IndexController@index')->name('admin.index');
    Route::get('users','Admin\UsersController@users')->name('admin.users');
    Route::get('systems','Admin\IndexController@systems')->name('admin.systems');
    //菜单路由
    Route::get('menus','Admin\MenusController@index')->name('admin.menus');
    Route::get('menus/add','Admin\MenusController@add')->name('admin.menus.add');
    //配置路由
    Route::get('config','Admin\ConfigController@index')->name('admin.config');
    //数据管理路由
    Route::get('database','Admin\DatabaseController@index')->name('admin.database');

});
//其他后台路由


Route::get('/sqltomigration',function(){
    return view('sqltomigration');
});
Route::post('/index/sqltomigration','Admin\IndexController@sqltomigration');

