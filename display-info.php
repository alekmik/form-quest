<?php
    $firstname =  $_POST['user_firstname'];
    $lastname =  $_POST['user_lastname'];
    $email =  $_POST['user_email'];
    $phone =  $_POST['user_phone_number'];
    $subject =  $_POST['user_subject'];
    $message =  $_POST['user_message'];

    echo nl2br("\n");
    echo nl2br("\n");
    echo  "Merci " . $firstname . " " . $lastname . " de nous avoir contacté à propos de " . $subject . ".";
    echo nl2br("\n");
    echo nl2br("\n");
    echo "Un de nos conseillers vous contactera soit à l’adresse " . $email . " ou par téléphone au ". $phone . " dans les plus brefs délais pour traiter votre demande : ";
    echo nl2br("\n");
    echo nl2br("\n");
    echo $message;
?>