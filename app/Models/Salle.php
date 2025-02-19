<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Salle extends Model
{
    use  HasFactory, SoftDeletes;
    protected $fillable = ['nom'];


    
    public static function addSalle(Request $request)
     {
         // Create a new Salles instance and assign values
        $salle = new Salle();
        $salle->nom = $request->nom;
        $salle->capacite = $request->capacite;
        $salle->description = $request->description;

        // Save the salles to the database
        $salle->save();

        // Return the saved salles instance
        return $salle;
    }



    public static function supprimer($id_salle)
    {

        $salle=Salle::find($id_salle);
        $salle->delete() ;

        // code...
    }
    public static function misajour(Request $request)
    {


        return DB::update
           ("
                UPDATE salles
                SET
                    nom = '$request->nom',
                    capacite = '$request->capacite',               
                    description = '$request->description',
                WHERE id = $request->id
             ");

        // code...
    }

}
