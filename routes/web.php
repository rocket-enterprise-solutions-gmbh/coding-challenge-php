<?php

use Illuminate\Support\Facades\Route;


Route::post('/tasks', 'App\Http\Controllers\TaskController@persistMultiple');
