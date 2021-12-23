<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php
include("header.html");
include("social.html");
?>
<main>
    <div class="formulary">
        <form action="">
            <label> Nom et Prémom
                <input type="text" placeholder="entrer nom">
            </label>

            <label> Email
                <input type="email" placeholder="x@xxx.xx" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
            </label>

            <label> Téléphone
                <input type="tel" name="phone" placeholder="xx xx xx xx xx"
                       pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
            </label>

            <label> Organisation
                <select name="orga">
                    <option value="">--Sélectionner votre organisation--</option>
                    <option value="particulier">particulier</option>
                    <option value="entreprise">entreprise</option>
                    <option value="académie">académie</option>
                </select>
            </label>

            <label>Commentaire (optionel)
                <input type="text" placeholder="Entrer votre message ici">
            </label>
            <input type="submit">
        </form>
    </div>
</main>
<?php
include("top_button.html");
?>
<footer>

</footer>
</body>
</html>