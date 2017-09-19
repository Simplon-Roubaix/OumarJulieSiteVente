<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());

}

$req = $bdd->prepare('INSERT INTO articles (titre, accroche, description)
VALUES(:titre, :accroche, :description)');


$req->execute(array(
        'titre' => $_POST['titre'],
        'accroche' => $_POST['accroche'],
        'description' => $_POST['description'],
        ));

        // $card = $bdd->query('SELECT * from article');
        //         while ($value = $card->fetch())
        //             {
 ?>
