<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Qr;
use Matrix\Decomposition\QR as DecompositionQR;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
class Condidat extends Model
{

    use HasFactory, SoftDeletes;
    public static function add_condidat(Request $request)
    {
        $condidat = new Condidat();
        $condidat->nom = $request->nom;
        $condidat->prenom = $request->prenom;
        $condidat->date_naissance = $request->date_naissance;
        $condidat->email = $request->email;
        $condidat->adresse = $request->adresse;
        $condidat->specialite_id = $request->specialite_id;
        $condidat->lieu_naissance = $request->lieu_naissance;
        $condidat->telephone = $request->telephone;

    
        $condidat->save();
      
        return $condidat;
    }
    public static function modifier_condidat(Request $request)
    {
          $id = $request->id;
          $condidat = Condidat::findOrFail($id); // Find the condidat to update
        if ($condidat) {
          $condidat->nom = $request->nom;
          $condidat->prenom = $request->prenom;
          $condidat->date_naissance = $request->date_naissance;
          $condidat->email = $request->email;
          $condidat->specialite_id = $request->specialite_id;
          $condidat->lieu_naissance = $request->lieu_naissance;
          $condidat->telephone = $request->telephone;
          $condidat->adresse = $request->adresse;
          $condidat->save();
        }

          return $condidat; // Return the updated condidat object
    }
    public static function supprimer_condidat($id_condidat)
    {
        $condidat=Condidat::find($id_condidat);
        $condidat->delete() ;
    }
    public static function restaurer_condidat($id_condidat)
    {

    $id_condidat = Condidat::withTrashed()->find($id_condidat);
    $id_condidat->restore(); 

    }


}