<?php
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function fab_cartes(){
global $bdd;
$images = $bdd -> query('SELECT *
FROM articles a
INNER JOIN images i
ON a.id = i.id');

return $images;
}