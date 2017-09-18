<?php session_start();
?>
<!doctype html>
<html>
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
      <section id="inscription">
        <form method="post" action="">
          <input type="varchar" name="pseudo">
          <input type="password" name="pass">
          <input type="submit" name="inscrire">
        </form>
<?php      
   
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Vérification de la validité des informations
if (!empty($_POST['pass']) && !empty($_POST['pseudo'])){
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Insertion
$req = $bdd->prepare('INSERT INTO login(pseudo, pass, date_inscription) VALUES(:pseudo, :pass, CURDATE())');
$req->execute(array(
'pseudo' => $_POST['pseudo'],
'pass' => $pass_hache));
    echo "votre inscription est bien prise en compte, accédez au site";
    ?><a href="index.php">Bonbon</a><?php
    $_SESSION['pseudo'] = $_POST['pseudo'];
}
else {

    echo 'entrez des données correctes';
}
?>



      </section>
      </body>
      </html>