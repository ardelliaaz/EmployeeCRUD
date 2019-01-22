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


Route::get('/lemot', function () {
    return view('kenapa kok lemot');
});


Route::get('/home', function () {
    return view('disini omah');
});


Route::get('/sama', function () {
    return view('sama saja sami mawon');
});


Route::get('/polong', function () {
    return view('telo');
});


Route::get('/terong', 'CapungController@Index');

//memanggil contoller capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//Route::get('/Supplier', 'SupplierController@index');

//Route::get('/customer/create', 'CustomerController@cindex');

//Route::get('/customer/create', 'CustomerController@create');
//membuat store dari customer
//Route::get('/customer/store', 'CustomerController@store');


Route::resource('/customer', 'CustomerController');

Route::resource('/supplier', 'SupplierController');

Route::resource('/employee', 'EmployeeController');

