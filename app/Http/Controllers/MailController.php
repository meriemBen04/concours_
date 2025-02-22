<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
use App\Models\Condidat;

class MailController extends Controller
{
    


    public function sendEmail1()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(base_path());
        $dotenv->load();
    
        $mail = new PHPMailer(true);
        $errors = []; // Stocker les erreurs des candidats
    
        try {
            $mail->SMTPDebug = true;
            $mail->Host       = env('SMTP_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('SMTP_USER');
            $mail->Password   = env('SMTP_PASS');
            $mail->SMTPSecure = env('SMTP_SECURE');
            $mail->Port       = env('SMTP_PORT');
            $mail->setFrom(env('SMTP_USER'), 'Fsic.univ-alger3');
            $mail->isHTML(true);
            $mail->Timeout = 20;

    
            // Récupération des candidats avec leur salle
            $candidats = Condidat::with('salle')->where('id', '>', 537)->orderBy('id', 'asc')->get();
            foreach ($candidats as $candidat) {
                try {
                    if (!$candidat->email || !$candidat->salle) {
                        continue; // Ignorer si l'e-mail ou la salle est manquant
                    }
    
                    // Vérifier si l'email est valide
                    if (!filter_var($candidat->email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "❌ Email invalide pour {$candidat->nom} ({$candidat->email})";
                        continue; // Passer au prochain candidat sans bloquer l'envoi
                    }
    
                    $mail->clearAddresses();
                    $mail->addAddress($candidat->email);
    
                    $mail->Subject = 'Concours doctorat fsic univ alger 3 2024 2025';
                    $mail->Body    = "
                        <div dir='rtl' style='text-align: right; font-family: Arial, sans-serif;'>
                            <p>تحية طيبة وبعد،</p>
                            <p>بعد استكمال التسجيل على منصة Progress،
                            أنتم مدعوون لاجتياز امتحانات المسابقة بكلية علوم الإعلام والاتصال جامعة الجزائر 3 
                            بـ: <strong>{$candidat->salle->nom}</strong>.</p>
                            <br>
                            <p>بالتوفيق للجميع</p>
                        </div>
                    ";
    
                    $mail->send();
                } catch (Exception $e) {
                    $errors[] = "❌ Erreur pour {$candidat->nom} ({$candidat->email}) : " . $mail->ErrorInfo;
                    continue; // Passer au prochain email même s'il y a une erreur
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => "❌ Erreur SMTP globale : {$mail->ErrorInfo}"]);
        }
    
        // Afficher les erreurs après la boucle
        if (!empty($errors)) {
            return response()->json([
                'message' => '✅ Envoi terminé, mais avec des erreurs.',
                'errors' => $errors
            ]);
        }
    
        return response()->json(['message' => '✅ Tous les emails ont été envoyés avec succès !']);
    }
    

public function sendEmail(Request $request)
{
    // 1️⃣ Valider l'email fourni
    $request->validate([
        'email' => 'required|email'
    ]);

    $email = $request->input('email');

    // 2️⃣ Vérifier si l'email existe pour un seul candidat
    $candidat = Condidat::where('email', $email)->first();

    if (!$candidat) {
        return response()->json([
            'message' => '❌ Cet email n\'existe pas dans la base de données.'
        ], 404);
    }

    // 3️⃣ Vérifier s'il y a plusieurs candidats avec le même email
    if (Condidat::where('email', $email)->count() > 1) {
        return response()->json([
            'message' => '⚠️ Cet email est utilisé par plusieurs candidats.'
        ], 409);
    }

    try {
        // 4️⃣ Initialiser PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = env('SMTP_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = env('SMTP_USER');
        $mail->Password   = env('SMTP_PASS');
        $mail->SMTPSecure = env('SMTP_SECURE');
        $mail->Port       = env('SMTP_PORT');
        $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $mail->isHTML(true);

        // 5️⃣ Vérification avant l'envoi
        if (!$candidat->email || !$candidat->salle) {
            return response()->json([
                'message' => "❌ Le candidat {$candidat->nom} n'a pas d'email ou de salle."
            ], 400);
        }

        // 6️⃣ Ajouter le destinataire et envoyer l'email
        $mail->addAddress($candidat->email);
        $mail->Subject = 'Concours doctorat FSIC Univ Alger 3 2024-2025';
        $mail->Body    = "
            <div dir='rtl' style='text-align: right; font-family: Arial, sans-serif;'>
                <p>تحية طيبة وبعد،</p>
                <p>بعد استكمال التسجيل على منصة Progress،
                أنتم مدعوون لاجتياز امتحانات المسابقة بكلية علوم الإعلام والاتصال جامعة الجزائر 3 
                بـ: <strong>{$candidat->salle->nom}</strong>.</p>
                <br>
                <p>بالتوفيق للجميع</p>
            </div>
        ";

        $mail->send();

        return response()->json([
            'message' => '✅ Email envoyé avec succès à ' . $candidat->email
        ]);

    } catch (Exception $e) {
        return response()->json([
            'message' => '❌ Erreur lors de l\'envoi de l\'email.',
            'error' => $mail->ErrorInfo
        ], 500);
    }
}
    
    }
    


