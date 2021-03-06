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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/','AdminController@index');
Route::get('/user_mobile','UserMobileController@index');
Route::get('/user_cms','UserCmsController@index');
Route::get('/SalesAssigment','SalesAssigmentController@index');

//Push Notification
Route::get('/PushNotification','PushNotificationController@index');
Route::get('/PushNotification/get/{id}','PushNotificationController@getById');
Route::post('/PushNotification/save','PushNotificationController@save');
Route::get('/PushNotification/delete/{id}','PushNotificationController@delete');
Route::post('/PushNotification/update','PushNotificationController@update');


// //Criticism & Suggestion
// Route::get('/CriticismSuggestion','CriticismSuggestionController@index');

//Master GCM
Route::get('/master_gcm','MasterGcmController@index');

//GCM Access
Route::get('/MasterGcmAccess','MasterGcmAccessController@index');

//Active Leads
Route::get('/active_leads','ActiveLeadsController@index');

//Archive
Route::get('/archive','archiveController@index');

//Debug Role Management
Route::get('/debug_role_management','DebugRoleManagementController@index');
Route::post('/debug_role_management/save','DebugRoleManagementController@save');
Route::get('/debug_role_management/get/{id}','DebugRoleManagementController@getById');
Route::post('/debug_role_management/update','DebugRoleManagementController@update');
Route::get('/debug_role_management/delete/{id}','DebugRoleManagementController@delete');




