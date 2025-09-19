<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function() {
	return 'This is an example route.';
});

Route::get('/example-2/{id}', [
	App\Http\Controllers\ExampleController::class, 'example'
]);

Route::get('/users', [
	App\Http\Controllers\UserController::class, 'index'
]);

Route::get('/users/create', [
	App\Http\Controllers\UserController::class, 'create'
]);

Route::get('/users/{id}/update', [
	App\Http\Controllers\UserController::class, 'update'
]);

Route::get('/users/{id}/delete', [
	App\Http\Controllers\UserController::class, 'delete'
]);