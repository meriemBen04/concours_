<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admins.home'); // Assure-toi que la vue existe dans resources/views/user/home.blade.php
    }
}
