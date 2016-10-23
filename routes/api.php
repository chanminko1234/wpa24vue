<?php

use Illuminate\Http\Request;
use App\Student;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('get-students', function(Request $request){
	$students = Student::get();
	sleep(3);
	return $students;
});

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



















