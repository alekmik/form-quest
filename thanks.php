<?php
$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email'];
$phone =  $_POST['phoneNumber'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];
//vérification côté serveur
$errors = [];
//vérification de la méthode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //S'il n'existe pas d'index firstname dans le tableau $_POST' alors ajout de l'erreur dans le tableau
    if (!isset($_POST['firstname'])) {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['lastname'])) {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['email'])) {
        $errors[] = "L'email est obligatoire";
    }
    if (!isset($_POST['subject'])) {
        $errors[] = "Le sujet est obligatoire";
    }
    if (!isset($_POST['message'])) {
        $errors[] = "Le message est obligatoire";
    }
    //Vérification si l'input est vide et suppression des espaces avant et après la donnée
    if (empty(trim($_POST['firstname']))) {
        $errors[] = "La variable prénom est vide";
    }
    if (empty(trim($_POST['lastname']))) {
        $errors[] = "La variable nom est vide";
    }
    if (empty(trim($_POST['email']))) {
        $errors[] = "La variable email est vide";
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo ("-> " . $_POST['email'] . " est une adresse email valide !");
    } else {
        echo ($_POST['email'] . " veuillez entrer une adresse email valide");
        $errors[] = "L'email non valide";
    }
    if (empty(trim($_POST['phoneNumber']))) {
        $errors[] = "La variable phoneNumber est vide";
    }
    if (empty(trim($_POST['subject']))) {
        $errors[] = "La variable sujet est vide";
    }
    if (empty(trim($_POST['message']))) {
        $errors[] = "La variable message est vide";
    }
    //si aucune erreur
    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        // header('Location: thanks.php');

        $firstname =  $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $email =  $_POST['email'];
        $phone =  $_POST['phoneNumber'];
        $subject =  $_POST['subject'];
        $message =  $_POST['message'];
        echo nl2br("\n");
        echo nl2br("\n");
        echo  "Merci " . $firstname . " " . $lastname . " de nous avoir contacté à propos de votre " . $subject . ".";
        echo nl2br("\n");
        echo nl2br("\n");
        echo "Un de nos conseillers vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande : ";
        echo nl2br("\n");
        echo nl2br("\n");
        echo $message;
    }
}
?>

<?php // Affichage des éventuelles erreurs 
if (count($errors) > 0) : ?>
    <div class="border border-danger rounded p-3 m-5 bg-danger">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>