<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//API link >>   http://127.0.0.1:8000/api/table1_api
Route::get('/table1_api','API\Table1Controller@index');

//CRUD > ADD  >>http://127.0.0.1:8000/api/addproduct
Route::post('/addproduct', 'API\Table1Controller@addproduct');

//CRUD > Mass Delete
Route::post('/mass_delete', 'API\Table1Controller@mass_delete');