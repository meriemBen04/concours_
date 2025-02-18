<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concours extends Model
{
    use HasFactory, SoftDeletes;

    
    public static function addConcours(Request $request)
    {
        $validated = $request->validate([
            'annee' => ['required', 'regex:/^\d{4}\/\d{4}$/', function ($attribute, $value, $fail) {
                list($start, $end) = explode('/', $value);
                if ($end != $start + 1) {
                    $fail("L'année académique doit être consécutive (ex: 2023/2024).");
                }
            }],
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);
        // Create a new Concours instance and assign values
        $concours = new Concours();
        $concours->annee_acadimique = $request->annee;
        $concours->date_debut = $request->date_debut;
        $concours->date_fin = $request->date_fin;
        $concours->description = $request->description;

        // Save the concours to the database
        $concours->save();

        // Return the saved concours instance
        return $concours;
    }
    public static function modifier($request)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'annee' => ['required', 'regex:/^\d{4}\/\d{4}$/', function ($attribute, $value, $fail) {
            list($start, $end) = explode('/', $value);
            if ($end != $start + 1) {
                $fail("L'année académique doit être consécutive (ex: 2023/2024).");
            }
        }],
        'date_debut' => 'required|date',
        'date_fin' => 'required|date|after:date_debut',
    ]);

    // Retrieve the concours record by the ID
    $concours = self::find($request->id);
    
    // If concours exists, update it
    if ($concours) {
        $concours->annee_acadimique = $request->annee;
        $concours->date_debut = $request->date_debut;
        $concours->date_fin = $request->date_fin;
        $concours->description = $request->description;
        $concours->save();
    }
    return $concours;  // Return the updated concours object (if necessary)
}
public static function supprimer($id_concours)
    {
        $concours = Concours::find($id_concours);
        if ($concours) {
            $concours->delete(); // Soft delete
        }
    }

    
}
