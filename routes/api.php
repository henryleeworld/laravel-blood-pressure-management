<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    Route::apiResource('permissions', 'PermissionsApiController');
    Route::apiResource('roles', 'RolesApiController');
    Route::apiResource('users', 'UsersApiController');
});
