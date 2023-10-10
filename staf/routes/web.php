<?php

use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use Monolog\Handler\WebRequestRecognizerTrait;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// index - Show All Activities (page d'accueil)
Route::get('/', [ActivityController::class, 'index']);



// All users 
Route::get('/users', [UserController::class, 'index']);

//create - Show form to create new activity
Route::get('/activities/create', [ActivityController::class, 'create']);

//store - store new activity (save)
Route::post('/activities', [ActivityController::class, 'store']);

//Show Edit Form
Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit']);

//Edit = Update Activity
Route::put('/activities/{activity}', [ActivityController::class, 'update']);

//Delete Activity
Route::delete('/activities/{activity}', [ActivityController::class, 'destroy']);

// show - Show Single Activity
Route::get('/activities/{activity}', [ActivityController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout'] );

//Show Login Form
Route::get('/login', [UserController::class, 'login']);

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);