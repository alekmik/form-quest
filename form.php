
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="form.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_firstname">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="phone">Téléphone :</label>
            <input  type="number"  id="phone"  name="user_phone_number">
        </div>
        <div>
            <label  for="subject">Sujet :</label>
            <select name="user_subject" id="subject">
                <option value="">--Please choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
        <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
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