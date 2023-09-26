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

//update - Update activity
//destroy - Delete activity


// Route::get('/welcome', function() {
//     return view('welcome');
// });


// Route::get('/register', function() {
//     return view('register');
// });

// Route::get('/login', function() {
//     return view('login');
// });

// Route::get('/show', function() {
//     return view('show');
// });

// index - Show All Activities (page d'accueil)
Route::get('/', [ActivityController::class, 'index']);



// All users 
Route::get('/users', [UserController::class, 'index']);

//create - Show form to create new activity
Route::get('/activities/create', [ActivityController::class, 'create']);

//store - store new activity (save)
Route::post('/activities', [ActivityController::class, 'store']);



// show - Show Single Activity
Route::get('/activities/{activity}', [ActivityController::class, 'show']);