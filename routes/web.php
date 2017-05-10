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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UserController');
Route::resource('agency','AgencyController');
Route::resource('business','BusinessController');
Route::resource('management','ManagementController');
Route::resource('operation','OperationController');
Route::resource('permission','PermissionController');
Route::resource('purse','PurseController');
Route::resource('reason','ReasonController');
Route::resource('role','RoleController');

//test to relationships
Route::get('test',function(){
    $user = App\User::with('roles')
            ->where('id',1)
            ->get();
    return dd($user);
});