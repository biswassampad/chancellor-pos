<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/searchitem','ResturantController@searchitem');
Route::get('/gettablesfour','ResturantController@gettablesfour');
Route::get('/gettablessix','ResturantController@gettablessix');
Route::post('/addorderres','ResturantController@addorderres');
Route::get('/getitems','ResturantController@getitems');
Route::get('/getpirce/{id}','ResturantController@getpriceofitem');
Route::get('/getitemdet/{id}','ResturantController@getdetailsidwise');
Route::post('/additemtoorder/{id}','ResturantController@additemtoorder');
Route::get('/getorders','ResturantController@getallorders');
Route::get('/getorderdetails/{id}','ResturantController@getperticularorder');
Route::get('/tableno/{id}','ResturantController@getTableNumber');
Route::post('/additemstohotelorder/{id}','HotelController@additemtoorder');
Route::get('/hnotif','NotificationController@getrequestshotel');
Route::get('/enotif','NotificationController@getrequestsevent');
Route::get('/getvacantrooms/{id}','HotelController@getroombydates');
Route::get('/getvacantevents/{id}','EventController@geteventsbydates');
Route::get('/eventhalls','EventController@geteventhalls');
Route::get('/eventcatsveg','EventController@getcatgoriesveg');
Route::get('/eventcatsnveg','EventController@getcatgoriesnveg');
Route::get('/geteventnumber/{id}','EventController@geteventnumber');
Route::post('/addeventdetails','EventController@addeventdetails');
Route::get('/getcustsomerforkot/{id}','ResturantController@getcustsomerforkot');
Route::get('/orderitems/{id}','ResturantController@orderitemsfororder');
Route::get('/getpricelistfororder/{id}','ResturantController@orderitemsprice');
Route::get('/hrequestslist','HotelController@getnotif');
Route::get('/readnotifications','HotelController@updatenotifications');
Route::get('/erequestslist','EventController@getnotif');
Route::get('/ereadnotifications','EventController@readnotif');
Route::get('/contactlist','NotificationController@getcontacts');
Route::get('/readcontact','NotificationController@readcontact');
Route::get('/conts','NotificationController@contactcount');
Route::get('/vacanttable/{id}','HotelController@vacanttable');
Route::post('/bookroom','HotelController@BookRoom');
Route::get('/hotelbookingdetails/{id}','HotelController@GetDetails');
Route::get('/hotelcutsomer/{id}','HotelController@GetCustomerDetails');
Route::get('/roomdetails/{id}','HotelController@getroomdetails');
Route::get('/clearbooking/{id}','HotelController@clearbooking');
Route::get('/clearcustomer/{id}','HotelController@clearcustomer');