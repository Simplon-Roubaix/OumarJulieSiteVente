<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter un nouvel article</title>
  </head>
  <body>


<form class="" action="formulaire_post.php" method="post">
<label for="titre">Titre</label></label> <input type="text" name="titre" value=""><br />
<label for="titre">Accroche</label></label> <input type="text" name="accroche" value=""><br />
<label for="titre">Description</label></label> <input type="text" name="description" value=""><br />
<input type="file" name="fichier"/><br />
<button type="submit" name="button">Créer</button>

</form>

<?php

try {

$bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root');

} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}


 ?>

  </body>
</html>
