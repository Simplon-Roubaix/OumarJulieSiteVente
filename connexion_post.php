<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = $_POST['pseudo'];

try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// changement du nom des variables récupérées
$pseudo = $_POST['pseudo'];

// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Vérification des identifiants
$req = $bdd -> prepare('SELECT * 
    FROM login 
    WHERE pseudo = :pseudo AND pass = :pass');

$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
    ?><a href="connexion.php">Essaye encore</a>			
    <?php
}
else
{   
    ob_start();
    header('Location: controller/index.php');
    ob_end_flush();
}
?>


</body>
</html>