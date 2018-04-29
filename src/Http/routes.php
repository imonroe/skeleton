<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use :vendor\:package_name\Http\Controllers\SkeletonController;

Route::namespace(':vendor\:package_name\Http\Controllers')->group(
    function () {
        Route::group(['middleware' => ['web']], function () {
            Route::get('/:package_name/demo', 'SkeletonController@demo');
        });
    }
);
