<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

class MailController extends Controller
{
    public function sendEmail()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(base_path());
        $dotenv->load();

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = env('SMTP_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('SMTP_USER');
            $mail->Password   = env('SMTP_PASS');
            $mail->SMTPSecure = env('SMTP_SECURE');
            $mail->Port       = env('SMTP_PORT');

            $mail->setFrom(env('SMTP_USER'), 'Concours Doctorat 2024/2025');
            $mail->addAddress('mr_belimane@esi.dz');


            $mail->isHTML(true);
            $mail->Subject = 'Remerciement pour le Succès de Notre Application';
            $mail->Body    = '<p>Je tiens à vous remercier sincèrement pour votre engagement et votre précieuse contribution au succès de notre application. Votre expertise et votre détermination ont joué un rôle clé dans cette réussite, et c\'est un honneur d\'avoir collaboré avec vous.

            En reconnaissance de votre impact exceptionnel, nous avons le plaisir de vous attribuer le "Tech Excellence Prize" 🏆 accompagné d’une récompense d\'une valeur de 10 000 $. Ce prix symbolise notre gratitude et célèbre votre travail remarquable.

            Merci encore pour votre talent et votre implication. Ce succès est aussi le vôtre ! 🚀👏</p> 
            <p>Rahma wa9il amenti this is me merieeeeem  b9eli le email kifech nbedlou sinon ncéyi whd jdid w say</p>
            <br>
            
            cordialement ';

            $mail->send();
            return response()->json(['message' => '✅ Email envoyé avec succès !']);
        } catch (Exception $e) {
            return response()->json(['error' => "❌ Erreur : {$mail->ErrorInfo}"]);
        }
    }
}
