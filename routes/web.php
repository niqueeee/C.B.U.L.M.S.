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


Route::resource('maintenance/banks','bankController');
Route::get('maintenance/banks/get/data', ['uses' => 'bankController@data', 'as' => 'banks.getData']);
Route::put('maintenance/banks/softdelete/{bank}', ['uses' => 'bankController@softdelete', 'as' => 'banks.softDelete']);

Route::resource('maintenance/businesstypes','businessTypeController');
Route::put('maintenance/businesstypes/softdelete/{businessType}',['uses' => 'businessTypeController@softDelete', 'as' => 'businesstypes.softdelete']);
Route::get('maintenance/businesstypes/get/data', ['uses' => 'businessTypeController@data', 'as' => 'businesstypes.getData']);

Route::resource('maintenance/buildingtypes','buildingTypeController');
Route::put('maintenance/buildingtypes/softdelete/{buildingType}',['uses' => 'buildingTypeController@softDelete', 'as' => 'buildingtypes.softdelete']);
Route::get('maintenance/buildingtypes/get/data', ['uses' => 'buildingTypeController@data', 'as' => 'buildingtypes.getData']);

Route::resource("utilities","utilitiesController");

Route::resource("maintenance/parkrates","parkRateController");
Route::get('maintenance/parkrates/get/data', ['uses' => 'parkRateController@data', 'as' => 'parkrates.getData']);

Route::resource("maintenance/marketrates","marketRateController");
Route::get('maintenance/marketrates/get/data', ['uses' => 'marketRateController@data', 'as' => 'marketrates.getData']);

Route::resource("maintenance/parkareas","parkAreaController");
Route::get('maintenance/parkareas/get/data', ['uses' => 'parkAreaController@data', 'as' => 'parkareas.getData']);
Route::get('maintenance/parkareas/get/building', ['uses' => 'parkAreaController@getBuilding', 'as' => 'parkareas.getbuilding']);
Route::get('maintenance/parkareas/getFloor/{floor}', ['uses' => 'parkAreaController@getFloor', 'as' => 'parkareas.getFloor']);
Route::get('maintenance/parkareas/getLatest/{floor}', ['uses' => 'parkAreaController@getLatest', 'as' => 'parkareas.getLatest']);
Route::post('maintenance/parkareas/storeSpace', ['uses' => 'parkAreaController@storeSpace', 'as' => 'parkareas.storeSpace']);
Route::put('maintenance/parkareas/softdelete/{parkarea}',['uses' => 'parkAreaController@softdelete', 'as' => 'parkareas.softdelete']);

Route::resource("maintenance/parkspaces","parkSpaceController");
Route::get('maintenance/parkspaces/get/data', ['uses' => 'parkSpaceController@data', 'as' => 'parkspaces.getData']);
Route::get('maintenance/parkspaces/get/building', ['uses' => 'parkSpaceController@getBuilding', 'as' => 'parkspaces.getBuilding']);
Route::get('maintenance/parkspaces/getParkArea/{id}', ['uses' => 'parkSpaceController@getParkArea', 'as' => 'parkspaces.getParkArea']);
Route::get('maintenance/parkspaces/getLatest/{id}', ['uses' => 'parkSpaceController@getLatest', 'as' => 'parkspaces.getLatest']);
Route::put('maintenance/parkspaces/softdelete/{parkspace}',['uses' => 'parkSpaceController@softdelete', 'as' => 'parkspaces.softdelete']);

Route::resource("maintenance/buildings","buildingController");
Route::get('maintenance/buildings/get/data', ['uses' => 'buildingController@data', 'as' => 'buildings.getData']);
Route::put('maintenance/buildings/softdelete/{building}',['uses' => 'buildingController@softdelete', 'as' => 'buildings.softdelete']);
Route::post('maintenance/buildings/storefloor',['uses' => 'buildingController@storefloor', 'as' => 'buildings.storefloor']);
Route::get('maintenance/buildings/getFloor/{floor}',['uses' => 'buildingController@getFloor', 'as' => 'buildings.getfloor']);
Route::get('custom/getCity/{id}', ['uses' => 'customController@getCity', 'as' => 'custom.getCity']);



