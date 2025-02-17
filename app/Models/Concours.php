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
}
