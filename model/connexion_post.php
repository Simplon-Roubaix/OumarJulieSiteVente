<?php
// On démarre la session avant d'écrire du code HTML
// session_start();

// On créé une variable de session dans $_SESSION
// $_SESSION['pseudo'] = $_POST['pseudo'];

try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function connexion($pseud, $bdd){
    global $bdd;

    // changement du nom des variables récupérées
    $pseudo = $_POST['pseudo'];

    // Hachage du mot de passe
//    $pass_hache = sha1($_POST['pass']);

    // Vérification des identifiants
    $req = $bdd -> prepare('SELECT * 
        FROM login 
        WHERE pseudo = :pseudo');

    $req->execute(array(
        'pseudo' => $_POST['pseudo']
        ));

    $resultat = $req->fetch();
    return $resultat;
}
?>