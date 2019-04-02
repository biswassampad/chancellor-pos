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
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addorderres',function(){
    return view('addorderres');
});
Route::get('/addorderres','ResturantController@gettables');
Route::get('/tableorder/{id}',function(){
    return view('tableorder');
});
Route::get('/additem',function(){
    return view('additem');
});
Route::post('/addtomenu','ResturantController@additemtomenu');
Route::get('/searchitems','ResturantController@searchitems');
Route::get('/addtable',function(){
    return view('addtable');
});
Route::post('/addtableid','ResturantController@addtable');
Route::get('/additem2this/{id}',function(){
    return view('additem2this');
});
Route::get('/additem2this/{id}','ResturantController@getordered');
Route::post('/searchitem','ResturantController@searchitem');
Route::get('/printorders',function(){
    return view('listorder');
});
Route::get('/billkot/{id}',function(){
    return view('billkot');
});
Route::get('/billkot/{id}','ResturantController@billget');
Route::get('/billkot/tableno/{id}','ResturantController@getTableNumber');
Route::get('billkot/inactive/{id}','ResturantController@inactiveOrder');
Route::get('/settings',function(){
    return view('settings');
});
Route::get('/addroom',function(){
    return view('addroom');
});
Route::post('/addtoroom','HotelController@addnewroom');
Route::get('/roomscheck',function(){
    return view('roomscheck');
});
Route::get('/roomscheck','HotelController@getavailable');
Route::get('/roombook',function(){
    return view('roombook');
});
Route::get('/roombook','HotelController@getcustomers');
Route::post('/addcustomer','HotelController@addcustomer');
Route::get('/addtoroom/{id}',function(){
    return view('addtoroom');
});
Route::get('/addtoroom/{id}','HotelController@getvacantrooms');
Route::get('/getavailrooms','HotelController@getvacantroom');
Route::post('/assignroomtocustomer/{id}','HotelController@addcustomertoroom');
Route::get('/bookingdetails',function(){
    return view('bookingdetails');
});
Route::get('/customerdetails/{id}','HotelController@getcustomerfulldetails');
Route::get('/updateroom/{id}','HotelController@updateroomstatus');
Route::get('/addorderhotel',function(){
    return view('addorderhotel');
});
Route::get('/addorderhotel','HotelController@getrommslisted');
Route::get('/hotelorder/{id}',function(){
    return view('hotelorder');
});
Route::get('/hotelorder/{id}','HotelController@getitemsinorder');
Route::post('/adddorderhotel/{id}','HotelController@addorderhotel');
Route::get('/ordersforhotel/{id}','HotelController@ordersforhotel');
Route::get('/orderdetails/{id}','HotelController@getdetailsorder');
Route::get('/getorderdetails/{id}','HotelController@getdetailsoforder');
Route::get('/adduser',function(){
    return view('adduser');
});
Route::get('/adduser','SettingsController@getusers');
Route::post('/addcashier','SettingsController@addcashier');
Route::get('/addhalls',function(){
    return view('addhalls');
});
Route::post('/addhall','EventController@addEvntHall');
Route::get('/addeventcat',function(){
    return view('addeventcat');
});
Route::post('/addpackage','EventController@addcat');
Route::get('/eventcustomer',function(){
    return view('eventcustomer');
});
Route::get('/eventcustomer','EventController@eventcustomer');
Route::post('/addeventcustomer','EventController@addcustomer');
Route::get('/bookevent/{id}',function(){
    return view('bookevent');
});
Route::get('/eventhalls','EventController@eventhalls');
Route::get('/test',function(){
    return view('test');
});
});