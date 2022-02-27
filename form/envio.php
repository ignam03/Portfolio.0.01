<?php
$remitente = $_POST['email'];
$destinatario = 'ignafree97@gmail.com';
$asunto = 'Asunto ejemplo';
if(!$_POST){
?>


<?php
} else{

    $cuerpo = "Name and Surname: " . $_POST["name"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Suject" . $_POST["subject"] . "\r\n";
    $cuerpo .= "Message" . $_POST["message"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'https://carlos-dev.vercel.app/#contact'; //se debe crear un html que confirma el envío

}
?>
