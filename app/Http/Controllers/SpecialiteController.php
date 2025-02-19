<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $specialites =Specialite::all();

        return view('specialites.index',compact('specialites'));
        
    }
}
