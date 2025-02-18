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
        session()->flash('notification.message' , 'Concours '.$request->type_abonnement.' Ajouté avec succés');

             session()->flash('notification.type' , 'success');

        return back();
    }
    public function update(Request $request, $id)
{  

    // Call the model's modifier method to update the concours
    $concours = Concours::modifier($request);

    
    // If the concours was updated successfully, redirect with success
    if ($concours) {
        session()->flash('notification.message', 'Concours ' . $request->id . ' modifié avec succès');
        session()->flash('notification.type', 'success');
        
        return redirect()->route('concours.index');  // Redirect to the concours listing page (or any page you prefer)
    }

    // If concours is not found or update failed, redirect with error
    session()->flash('notification.message', 'Concours non trouvé');
    session()->flash('notification.type', 'error');
    
    return redirect()->route('concours.index');
}
public function delete(Request $request)
    {
        
        $id_concours = $request->id_concours;

        $concours = Concours::find($id_concours);

        if (!$concours) {
            return response()->json("Concours introuvable!");
        }

       Concours::supprimer($id_concours);
        
        $concours = ($concours->getAttributes());
        
        return response()->json($concours ?? "concours introuvable!");

    
    
    }

}