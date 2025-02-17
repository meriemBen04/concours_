<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concours;

class ConcoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Get all concours that are not soft deleted
        $concours = Concours::whereNull('deleted_at')->get();

        // Pass the concours data to the view
        return view('concours.index', compact('concours'));
    }

    public function create( Request $request) {

        Concours::addConcours($request);
        session()->flash('notification.message' , 'Abonnement '.$request->type_abonnement.' Ajouté avec succés');

             session()->flash('notification.type' , 'success');

        return back();
    }
}