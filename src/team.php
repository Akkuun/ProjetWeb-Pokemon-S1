<!DOCTYPE html>
<html lang="fr" id="html">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1" name="viewport">
    <title>Projet Web</title>
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
        <h3>Merci encore d'avoir visité notre site Internet !</h3>
    </div>

    <div class="team">
        <div>
            <h4>Enzo Martinez</h4>
            <img src="res/img/enzo.gif" alt="Enzo Martinez"/>
            <ul>
                <li>Recherches sur la controverse</li>
                <li>Mise en forme HTML</li>
                <li>Rédaction textes</li>
            </ul>
        </div>

        <div>
            <h4>Cécile Burille</h4>
            <img src="res/img/cécile.webp" alt="Cécille Burille"/>
            <ul>
                <li>Recherches sur la controverse</li>
                <li>Stylisation Website</li>
                <li>Rédaction des textes</li>
            </ul>
        </div>

        <div>
            <h4>Mathis Duban</h4>
            <img src="res/img/mathis.webp" alt="Mathis Duban"/>
            <ul>
                <li>Mise en place de l'organisation du groupe</li>
                <li>Mise en forme HTML</li>
                <li>Stylisation CSS</li>
                <li>Développement d'animations Javascript</li>
                <li>Responsive Design</li>
                <li>Déploiement sur Serveur</li>
            </ul>
        </div>
        
        <div>
            <h4>Eliott Barbet</h4>
            <img src="res/img/eliott.png" alt="Eliott Barbet"/>
            <ul>
                <li>Organisation de groupe GitHub</li>
                <li>Mise en forme HTML</li>
                <li>Stylisation CSS</li>
                <li>Développement d'animations Javascript</li>
                <li>Responsive Design</li>
                <li>Développement PHP</li>
            </ul>
        </div>
    </div>
    <div style="height: 120px"></div>
    <?php include("top_button.html"); ?>
</main>
<footer>
    <?php include("footer.php"); ?>
</footer>
</body>
</html>