<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/mail/Exception.php";
require __DIR__ . "/mail/PHPMailer.php";
require __DIR__ . "/mail/SMTP.php";

function enviarCorreoActivacion($correo, $nombre, $linkActivacion){

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'know2007@gmail.com';
        $mail->Password   = 'asdq dsev pcqm qwsz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remitente
        $mail->setFrom('TU_CORREO@gmail.com', 'NeoBank');
        $mail->addAddress($correo, $nombre);

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Activa tu cuenta NeoBank';
        $mail->Body = "
            <h2>Bienvenido a NeoBank, $nombre</h2>
            <p>Para activar tu cuenta haz clic en el siguiente botón:</p>
            <a href='$linkActivacion'
               style='padding:12px 20px;background:#2563eb;color:#fff;
               text-decoration:none;border-radius:6px;display:inline-block'>
               Activar cuenta
            </a>
            <p>Si no solicitaste este registro, ignora este correo.</p>
        ";

        $mail->send();
        return true;

    } catch (Exception $e) {
        return false;
    }
}
