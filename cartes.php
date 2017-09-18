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
      <section id="cartes">
<?php
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$images = $bdd -> query('SELECT *
FROM articles a
INNER JOIN images i
ON a.id_images = i.id');
// $images->fetch();

//$cartes = $bdd -> query('SELECT * FROM articles');

foreach ($images as $key => $value) {
    // var_dump($value);
       ?>

       <article class="card" style="width: 20rem;">
            <figure class="imageBonbon">
              <img class="card-img-top" src=<?php echo $value['source']?> alt="Card image cap">
            </figure>
			  <div class="card-block">
                <h4 class="card-title"><?php echo $value['titre']?></h4>
                <p class="card-text"><?php echo $value['accroche']?></p>
			    <a href="produit.php?article=<?php echo $key?>" class="btn btn-primary">Voir plus</a>
			  </div>
		</article>
<?php
}
?>
	</section>

	</body>
</html>
