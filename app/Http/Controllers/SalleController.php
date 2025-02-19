<?php

namespace App\Http\Controllers;
use App\Models\Salle;


use Illuminate\Http\Request;

class SalleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Get all concours that are not soft deleted
        $salles = Salle::whereNull('deleted_at')->get();
        // Pass the concours data to the view
        return view('salles.index', compact('salles'));
    }

    public function create( Request $request) {

        Salle::addSalle($request);
        session()->flash('notification.message' , 'Salles '.$request->id.' Ajouté avec succés');

             session()->flash('notification.type' , 'success');

        return back();
    }
    public function delete(Request $request)
    {
        dd($request->all()); // This will dump all request data
        $id_salle=($request->id_salle);
        
        $salle = Salle::find($id_salle);
        
        Salle::supprimer($id_salle);
        
        $salle = ($salle->getAttributes());
        
        return response()->json($salle ?? "salle introuvable!");
    }

    public function update(Request $request)
    {       
       $salle= Salle::misajour($request);
       if ($salle) {
        session()->flash('notification.message' , 'salle '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'success');
    } else {
        session()->flash('notification.message', 'salle non trouvé');
        session()->flash('notification.type', 'error');
    }
        
        return back();
    }


}
