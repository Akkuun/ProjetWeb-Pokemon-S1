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
<header>
    <?php include("header.php"); ?>
</header>
<main>
    <?php include("mini_header.php"); ?>
    <?php include("social.html"); ?>

    <div class="team">
        <h3>Contactez nous dès maintenant !</h3>
    </div>

    <div class="formulary">
        <form action="">
            <div>
                <div>Nom</div>
                <label>
                    <input type="text" placeholder="Nom">
                </label>
            </div>

            <div>
                <div>Prénom</div>
                <label>
                    <input type="text" placeholder="Prénom">
                </label>
            </div>

            <div>
                <div>Email</div>
                <label>
                    <input type="email" placeholder="x@xxx.xx" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           required/>
                </label>
            </div>

            <div>
                <div>Téléphone</div>
                <label>
                    <input type="tel" name="phone" placeholder="xx xx xx xx xx"
                           pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                </label>
            </div>

            <div>
                <div>Organisation</div>
                <label>
                    <select name="orga">
                        <option value="">-- Sélectionner votre organisation --</option>
                        <option value="particulier">particulier</option>
                        <option value="entreprise">entreprise</option>
                        <option value="académie">académie</option>
                    </select>
                </label>
            </div>

            <div>
                <div>Commentaire (Optionel)</div>
                <label>
                    <input type="text" placeholder="Entrer votre message ici">
                </label>
            </div>

            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </div>
    <div style="height: 32px"></div>
    <?php include("top_button.html"); ?>
</main>
<footer>
    <?php include("footer.php"); ?>
</footer>
</body>
</html>