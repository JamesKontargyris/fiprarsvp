<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
    abort(404);
});

Route::controller('whitehousedinner', 'WhiteHouseDinnerController');
Route::controller('globalgovernmentrelationsfair', 'GlobalGovernmentRelationsFairController');

Route::get('success', function()
{
    return view('success');
});
