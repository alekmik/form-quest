<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>

<body>

    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="lastname" required>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="firstname" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="email" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phoneNumber" required>
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select name="subject" id="subject" required>
                <option value="">--Please choose an option--</option>
                <option value="chien">Chien</option>
                <option value="chat">Chat</option>
                <option value="hamster">Hamster</option>
                <option value="perroquet">Perroquet</option>
                <option value="araignée">Araignéee</option>
                <option value="poisson rouge">Poisson rouge</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>