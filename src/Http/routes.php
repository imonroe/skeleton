<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use imonroe\skeleton\Http\Controllers\SkeletonController;

Route::namespace('imonroe\skeleton\Http\Controllers')->group(
    function () {
        Route::group(['middleware' => ['web']], function () {
            Route::get('/skeleton/demo', 'SkeletonController@demo');
        });
    }
);