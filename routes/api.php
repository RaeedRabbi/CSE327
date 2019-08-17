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

Route::middleware('auth:api')->get('/userMiddleware', function (Request $request) {
    return $request->user();
});

\Illuminate\Support\Facades\Route::post('/register','CredentialController@saveUser');
\Illuminate\Support\Facades\Route::post('/login','CredentialController@login');


\Illuminate\Support\Facades\Route::get('/userinfo/{id}','ApiController@userinfobyID')->middleware('user');


