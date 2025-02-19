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
use PhpOffice\PhpSpreadsheet\IOFactory;
class Condidat extends Model
{

      use HasFactory, SoftDeletes;
      protected $fillable = [
        'matricule', 'nom', 'prenom', 'date_naissance', 
        'genre', 'email', 'telephone', 'specialite_id', 'concours_id'
    ];
    public static function add_condidat(Request $request)
    { 
      //   $request->validate([
      //     'id' => 'required|integer|unique:condidats,id',
      //     'matricule' => 'required|string|unique:condidats,matricule',
      //     'nom' => 'required|string|max:255',
      //     'prenom' => 'required|string|max:255',
      //     'date_naissance' => 'required|date',
      //     'email' => 'email|unique:condidats,email',
      //     'telephone' => 'string|max:20',
      //     'specialite_id' => 'integer|exists:specialites,id',
      // ]);

    // Création du candidat
      $candidat = new Condidat([
          'matricule' => $request->matricule,
          'nom' => $request->nom,
          'prenom' => $request->prenom,
          'date_naissance' => $request->date_naissance,
          'email' => $request->email,
          'telephone' => $request->telephone,
          'specialite_id' => $request->specialite_id,
      ]);
    
        $candidat->save();
      
        Affectation_salle::create([
          'salle_id' => $request->salle_id,
          'concours_id' => $request->concours_id,
          'condidat_id' => $candidat->id,
      ]);
        
        return $candidat;
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
    public function specialite() {
      return $this->belongsTo(Specialite::class, 'specialite_id');
  }
  public function concours() {
    return $this->hasOneThrough(Concours::class, Affectation_salle::class, 'condidat_id', 'id', 'id', 'concours_id');
}

// Relation avec Salle via AffectationSalle
public function salle() {
    return $this->hasOneThrough(Salle::class, Affectation_salle::class, 'condidat_id', 'id', 'id', 'salle_id');
}
public function import($filePath)
    {
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        // Récupérer le dernier concours créé
        $dernierConcours = Concours::latest('id')->first();

        if (!$dernierConcours) {
            throw new \Exception('Aucun concours trouvé.');
        }

        foreach ($rows as $index => $row) {
            if ($index === 1) continue; // Ignorer la ligne d'entête

            $matricule = $row['B'] ?? null;
            $nom = $row['C'] ?? null;
            $prenom = $row['D'] ?? null;
            $dateNaissance = $row['E'] ?? null;
            $salleNom = $row['F'] ?? null;

            if (!$matricule || !$nom || !$prenom || !$dateNaissance || !$salleNom) {
                continue;
            }

            // Récupérer ou créer la salle
            $salle = Salle::firstOrCreate(['nom' => $salleNom]);

            // Récupérer ou créer le candidat
            $candidat = Condidat::firstOrCreate(
                ['matricule' => $matricule],
                ['nom' => $nom, 'prenom' => $prenom, 'date_naissance' => $dateNaissance]
            );

            // Affecter le candidat à la salle et au concours
            Affectation_salle::firstOrCreate([
                'id_salle' => $salle->id,
                'id_concours' => $dernierConcours->id,
                'id_candidat' => $candidat->id
            ]);
        }
    }
}
  

