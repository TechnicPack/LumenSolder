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

$app->get('/', 'ApiController@getIndex');
$app->get('/modpack', 'ApiController@getModpack');
$app->get('/modpack/{modpack}', 'ApiController@getModpack');
$app->get('/modpack/{modpack}/{build}', 'ApiController@getModpack');
$app->get('/mod', 'ApiController@getMod');
$app->get('/mod/{mod}', 'ApiController@getMod');
$app->get('/mod/{mod}/{version}', 'ApiController@getMod');
$app->get('/verify', 'ApiController@getVerify');
