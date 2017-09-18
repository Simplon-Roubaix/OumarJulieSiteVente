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

foreach ($images as $key => $value) {
       ?>

       <article class="card" style="width: 20rem;">
            <figure class="imageBonbon">
              <img class="card-img-top" src=<?php echo $value['source']?> alt=<?php echo $value['alt'] ?>>
            </figure>
			  <div class="card-block">
                <h4 class="card-title"><?php echo $value['titre']?></h4>
                <p class="card-text"><?php echo $value['accroche']?></p>
			    <a href="produit.php?id=<?php echo $value['id']?>" class="btn btn-primary">Voir plus</a>
			  </div>
		</article>
<?php
}
?>

	</section>

	</body>
</html>
<<<<<<< HEAD
=======

	</section>

>>>>>>> 6bf49f403aa2d5a0a7fe2cc5a52068ef0919b8b9
