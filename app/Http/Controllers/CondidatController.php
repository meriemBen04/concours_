<?php

namespace App\Http\Controllers;

use App\Models\Concours;
use App\Models\Condidat;
use Illuminate\Http\Request;
use App\Models\Specialite;
use App\Models\Salle;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Carbon\Carbon;
use App\Models\Affectation_salle;


class CondidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Get all concours that are not soft deleted
        $specialite = Specialite::all();
        $condidats = Condidat::all();
        $concours=Concours::all();
        $salles=Salle::all();

        return view('condidats.index', compact('condidats', 'specialite', 'concours', 'salles'));
    }
    public function store(Request $request) {

        $condidats = Condidat::add_condidat($request);
        session()->flash('notification.message' , 'condidat '.$request->nom.$request->prenom.' Ajouté avec succés');

        session()->flash('notification.type' , 'success');

   return back(); 
}
   public function import2(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $file = $request->file('file');
        $filePath = $file->getPathname();
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        // Utiliser le nom du fichier comme spécialité
        $specialiteNom = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $specialiteNom = trim($specialiteNom);
        
        try {
            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);

            // Récupérer le dernier concours créé
            $dernierConcours = Concours::latest('id')->first();
            if (!$dernierConcours) {
                return back()->with('error', 'Aucun concours trouvé.');
            }


            foreach ($rows as $index => $row) {
                if ($index === 1) continue; // Ignorer la ligne d'entête
                $matricule = $row['B'] ?? null;
                $nom = $row['C'] ?? null;
                $prenom = $row['D'] ?? null;
                $dateNaissance = $row['E'] ?? null;

                if ($dateNaissance) {
                    try {
                        // Convertir en format MySQL (YYYY-MM-DD)
                        $dateNaissance = Carbon::createFromFormat('d/m/Y', $dateNaissance)->format('Y-m-d');
                    } catch (\Exception $e) {
                        return back()->with('error', "Format de date invalide pour: $dateNaissance");
                    }
                }                $salleNom = $row['F'] ?? null;

                if (!$matricule || !$nom || !$prenom || !$dateNaissance || !$salleNom  || !$specialiteNom ) {
                    continue;
                }

                // Récupérer ou créer la salle
                $salle = Salle::firstOrCreate(['nom' => $salleNom]);

                $specialite = Specialite::firstOrCreate(
                    ['nom' => $specialiteNom],  // Vérifie si la spécialité existe déjà
                    ['created_at' => now(), 'updated_at' => now()] // Empêche les erreurs
                );

                // Récupérer ou créer le candidat avec sa spécialité
                $candidat = Condidat::firstOrCreate(
                    ['matricule' => $matricule],
                    [
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'date_naissance' => $dateNaissance,
                        'specialite_id' => $specialite->id
                    ]
                );

                // Affecter le candidat à la salle et au concours
                Affectation_salle::firstOrCreate([
                    'salle_id' => $salle->id,
                    'concours_id' => $dernierConcours->id,
                    'condidat_id' => $candidat->id
                ]);
            }

            session()->flash('notification.type', 'success');
            session()->flash('notification.message', 'Importation réussie.');
            return back();
        } catch (\Exception $e) {
            session()->flash('notification.type', 'error');
            session()->flash('notification.message', 'Erreur lors de l’importation: ' . $e->getMessage());
            return back();
        }
    }
    public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xls,xlsx,csv'
    ]);

    $file = $request->file('file');
    $filePath = $file->getPathname();

    try {

        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        // Récupérer le dernier concours créé
        $dernierConcours = Concours::latest('id')->first();
        if (!$dernierConcours) {
            return back()->with('error', 'Aucun concours trouvé.');
        }

        foreach ($rows as $index => $row) {


            if ($index === 1 ) continue; // Ignorer la ligne d'entête
            
            $matricule = $row['A'] ?? null;
            $email = $row['B'] ?? null;
            $nom = $row['E'] ?? null;
            $prenom = $row['F'] ?? null;
            $dateNaissance = $row['G'] ?? null;
            $phone = $row['H'] ?? null;
            $specialiteNom = $row['I'] ?? null;
            $salleNom = $row['K'] ?? null;

            if ($dateNaissance) {

                try {
                    // Convertir en format MySQL (YYYY-MM-DD)
                    $dateNaissance = Carbon::createFromFormat('d/m/Y', $dateNaissance)->format('Y-m-d');
                } catch (\Exception $e) {
                    dd($row);

                    return back()->with('error', "Format de date invalide pour: $dateNaissance");
                }

            }
           

            if (!$matricule || !$nom || !$prenom || !$dateNaissance || !$salleNom || !$specialiteNom) {
                continue;
            }

           

            // Récupérer ou créer la salle
            $salle = Salle::firstOrCreate(['nom' => $salleNom]);

            $specialite = Specialite::firstOrCreate(
                ['nom' => $specialiteNom],
                ['created_at' => now(), 'updated_at' => now()]
            );

            // Récupérer ou créer le candidat avec sa spécialité
            $candidat = Condidat::firstOrCreate(
                ['matricule' => $matricule],
                [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'telephone' => $phone,
                    'date_naissance' => $dateNaissance,
                    'specialite_id' => $specialite->id
                ]
            );

            // Affecter le candidat à la salle et au concours
            Affectation_salle::firstOrCreate([
                'salle_id' => $salle->id,
                'concours_id' => $dernierConcours->id,
                'condidat_id' => $candidat->id
            ]);
        }

        session()->flash('notification.type', 'success');
        session()->flash('notification.message', 'Importation réussie.');
        return back();
    } catch (\Exception $e) {
        session()->flash('notification.type', 'error');
        session()->flash('notification.message', 'Erreur lors de l’importation: ' . $e->getMessage());
        return back();
    }
}

}



