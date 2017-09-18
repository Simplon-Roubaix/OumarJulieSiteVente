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
<!-- Formulaire html -->
      <section id="inscription" class="col-md-4">
        <article class="login-panel panel panel-default">
            <h3 class="panel-title">Inscription</h3>
            <div class="panel-body">
                <form method="post" action="">
                  <div class="form-group">
                      <input class="form-control" placeholder="Pseudo" name="pseudo" type="varchar" value="">
                  </div> 
                  <div class="form-group">
                      <input class="form-control" placeholder="Mot de passe" name="pass" type="password" value="">
                  </div>
                  <input type="submit" name="inscrire">
                </form>
            </div>
        </article>
      </section>
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

    $req = $bdd -> prepare('SELECT pseudo FROM login WHERE pseudo = :pseudo');
    $req->execute(array( 'pseudo' => $_POST['pseudo']));
    $existe = $req->fetch();
    var_dump($existe);
    if($existe){ //verification de l'existence du pseudo
      echo 'Ce pseudo est déja utilisé ou un des champs est vide';
    }
    
    else{
    // Insertion du pseudo dans la base de données
      $req = $bdd->prepare('INSERT INTO login(pseudo, pass, date_inscription) VALUES(:pseudo, :pass, CURDATE())');
      $req->execute(array(
      'pseudo' => $_POST['pseudo'],
      'pass' => $pass_hache));

      echo "votre inscription est bien prise en compte, accédez au site"; ?>
      <br>
      <a href="index.php">Bonbon</a><?php
      $_SESSION['pseudo'] = $_POST['pseudo']; // affichage du pseudo
    }
}

?>
   </body>
</html>