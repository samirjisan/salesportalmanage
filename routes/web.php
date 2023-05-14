<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.login');
});

//Admin Register Route
Route::get('/adminreg','AdminRegisterController@index')->name('admin.register');
Route::post('/adminreg','AdminRegisterController@register')->name('admin.register');


//User Register Route
Route::get('/user','UserRegisterController@index')->name('user.register');
Route::post('/user','UserRegisterController@register')->name('user.register');


//User Login Route
Route::get('/login','UserLoginController@index')->name('user.login');
Route::post('/login','UserLoginController@login')->name('user.login');
Route::get('/logout','UserLoginController@logout')->name('user.logout');

//Admin Login Route
Route:: get('/admin/login','AdminLoginController@index')->name('admin.login');
Route:: post('/admin/login','AdminLoginController@login')->name('admin.login');
Route:: get('/admin/logout','AdminLoginController@logout')->name('admin.logout');

//Route::get('/te', 'AdminLoginController@test')->name('admin.showAdmins')->middleware('CheckAuthAdmin');


Route::group(['middleware'=> 'chkAdmin'],function () {

    Route::get('/admuse','AdminManageController@index');
    Route::post('/admuse','AdminManageController@register')->name('admuse.list');
    Route::get('/admuse/show', 'AdminSalesManageController@index')->name('admuse.show');
    
    //    ---------------------Search-----------------------
    Route::post('/admuse/show', 'AdminSalesManageController@search')->name('admuse.show');
    //    ---------------------Search-----------------------
    
    Route::get('/admuse/{id}/edit', 'AdminSalesManageController@edit')->name('admuse.edit');
    Route::post('/admuse/{id}/update', 'AdminSalesManageController@update')->name('admuse.update');
    Route::get('/admuse/{id}/delete', 'AdminSalesManageController@delete')->name('admuse.delete');

    Route::get('/admuse/export-excel', 'AdminSalesManageController@exportIntoExcel')->name('admuse.exportIntoExcel');

    Route::get('/admuse/search','AdminSalesManageController@search')->name('admuse.search');

    Route::get('/see', 'UserRegisterController@see')->name('user.see');

    Route::get('/admuse/cr','AdminManageController@credits')->name('admuse.cr');
    
    
    Route::get('/see/{id}/edit', 'UserRegisterController@edit')->name('user.edit');
    Route::post('/see/{id}/update', 'UserRegisterController@update')->name('user.update');
    Route::get('/see/{id}/delete', 'UserRegisterController@delete')->name('user.delete');


});


Route::group(['middleware'=> 'chkUser'],function (){

    Route::get('/entry','UserController@index');
    Route::post('/entry','UserController@register')->name('sales.list');
    Route::get('/show', 'SalesManageController@index')->name('sales.show');
    Route::get('/sales/{id}/edit', 'SalesManageController@edit')->name('sales.edit');
    Route::post('/sales/{id}/update', 'SalesManageController@update')->name('sales.update');
    Route::get('/sales/{id}/delete', 'SalesManageController@delete')->name('sales.delete');

    Route::get('/export-excel', 'SalesManageController@exportIntoExcel')->name('sales.exportIntoExcel');

    Route::get('/search','SalesManageController@search')->name('sales.search');

    Route::get('/cr','UserController@credits')->name('sales.cr');

//    Route::get('/see', 'UserRegisterController@see')->name('user.see');


//    Route::get('/show', function () {
//        $user = auth()->user();
//        return $user->sales()->get();
//    });
//
//    Route::get('/show/{id}', function ($id) {
//
//        $sale =  App\Sale::findOrFail($id);
//        if($sale->id == auth()->id()){
//            return $sale;
//        }
//        return "Only the owner can see his note.";
//    });


});