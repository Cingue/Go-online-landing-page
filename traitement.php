<?php
session_start(); 
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST)) {
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $ville = $_POST['ville'];
    $pack = $_POST['pack'];
    $email = $_POST['email'];
    $commentaire =$_POST['text_area'];
    $_SESSION['status'] = '';

    if (!empty($prenom) && !empty($numero) && !empty($ville) ) {
        
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        
        $mail->Username   = 'Vanoldcingue@gmail.com';            
        $mail->Password   = 'null';                    
        $mail->SMTPSecure =PHPMailer::ENCRYPTION_SMTPS;                                  
        $mail->Port       = 465;                                    
    
        //Recipients
        $mail->setFrom('vanoldcingue@gmail.com', $prenom);
        $mail->addAddress('vanoldcingue@gmail.com');
        $mail ->isHTML(true);
        $mail->Subject = 'NEW FORM SUBMISSION';

        $emai_template = "<h1> NOUVEAU PROSPECT </h1>
                            <p> PRENOM: $prenom </p>
                            <p> NUMERO: $numero </p>
                            <p> VILLE: $ville </p>
                            <p> PACK: $pack </p>
                            <p> E-MAIL: $email </p>
                            <p> COMMENTAIRE: $commentaire </p>";

        $mail->Body    = $emai_template;
        $mail->send();
        echo 'Message has been sent';
        header("Location: index.php#formulaire");
        $_SESSION['status']= 'Message envoyé avec success';
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: index.php#formulaire");
        $_SESSION['status']= 'Une erreur est survenue. Veuillez ressayer';
    }
    }

} else{
    
}
