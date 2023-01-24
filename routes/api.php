<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1',  'as' => 'api.', 'namespace' => 'Api\V1'], function () {

    Route::post('send_data_for_register_client', [App\Http\Controllers\Api\V1\UserController::class, 'send_data_registration']);
    Route::post('send_edit_client_value', [App\Http\Controllers\Api\V1\UserController::class, 'edit_client_in_DB']);
    Route::post('send_value_Delete_client', [App\Http\Controllers\Api\V1\UserController::class, 'delete_client_from_DB']);
    Route::get('get_all_clients', [App\Http\Controllers\Api\V1\UserController::class, 'get_all_clients']);

    Route::post('send_value_for_delete_link', [App\Http\Controllers\Api\V1\UserController::class, 'top_delete_link']);
//    Route::get('send_value_for_get_new_link', [App\Http\Controllers\Api\V1\UserController::class, 'get_all_clients']);


});

