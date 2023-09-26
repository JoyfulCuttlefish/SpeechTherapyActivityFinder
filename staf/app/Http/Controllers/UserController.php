<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Get and Show all activities
    public function index() {
        return view('users', [
            'users' => User::all()
        ]);
    }
}