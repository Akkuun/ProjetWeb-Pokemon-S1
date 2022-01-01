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

    <div id="main">
        <div id="--">
            <?php include('res/txt/-.txt'); ?>
        </div>

        <div id="content">
            <div class="article single">
                <div class="text">
                    <h3>
                        Bienvenue !
                    </h3>
                    <p>
                        Bonjour et bienvenue sur notre site web, notre équipe est constituée de : <br>Mathis, Eliott,
                        Cécile
                        ainsi que moi-même Enzo.
                        <br>
                        Et je vous laisse en apprendre plus sur nous dans la section dédiée de notre site web.
                        <br><br>
                        Nous avions à traiter la question de la controverse sociotechnique suivante :  <br><br>
                        <strong>Les jeux de cartes à collectionner font-ils émerger un nouveau marché de l’art via
                            internet
                            ?</strong>
                        <br><br>
                        Afin de répondre à cette controverse nous allons traiter dans un premier temps de
                        <strong>la définition</strong> et des <strong>caractéristiques</strong> du <strong>Marché de
                            l’art</strong> ». Deuxièmement nous afficherons les similarités de ce marché de l’art avec
                        le
                        <strong>marché des cartes </strong>, plus spécifiquement des cartes pokemon. Et dans une
                        troisième
                        partie, avant de conclure nous <strong>élargirons le marché des cartes </strong>pokemon à
                        <strong>d’autre
                            exemple de bulles spéculative</strong> tel que la crypto monnaie.
                        <br>
                    </p>
                </div>
            </div>
            <div style="height: 204px"></div>
        </div>
        <div class="side"></div>
    </div>
    <?php include("top_button.html"); ?>
</main>
<footer>
    <?php include("footer.php") ?>
</footer>
</body>
</html>