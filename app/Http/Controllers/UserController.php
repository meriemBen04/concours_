<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.home'); // Assure-toi que la vue existe dans resources/views/user/home.blade.php
    }
}
