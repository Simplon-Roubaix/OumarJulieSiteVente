<?php 
session_start(); ?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css/bootstrap.css">

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <section id="upOrIn">
            <h2>Bienvenue !</h2>

            <a type="button" class="btn btn-primary btn-lg" href="controller/inscription.php">s'inscrire</a>

            <br>

            <a type="button" class="btn btn-secondary btn-lg" href="controller/connexion.php">se connecter</a>
            <?php
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
?>
        </section>
    </body>
</html>