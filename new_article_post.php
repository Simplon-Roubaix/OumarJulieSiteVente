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
    <body id="new_article_post">
     	<?php 
		try //Connexion a la base de donnees
		{
		    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}

// Envoi des données de l'article
		$nvl_article = $bdd -> prepare('INSERT INTO articles (titre, accroche) VALUES (:titre, :accroche)');
		
		$nvl_article -> execute(array(
			'titre' => $_POST['titre'],
			'accroche' => $_POST['accroche'],
			));

// ajout de l'image dans dossier image
		move_uploaded_file($_FILES['source']['tmp_name'], 'img/' . basename($_FILES['source']['name']));
// Envoi des données de l'image
		$nvl_img = $bdd -> prepare('INSERT INTO images (source, alt) VALUES (:source, :alt)');
		
		$nvl_img -> execute (array(
			'source' => 'img/' . basename($_FILES['source']['name']),
			'alt' => 'description de l\'image'
			));

		$nvl_carte = $bdd -> query('SELECT * 
			FROM articles a
			INNER JOIN images i 
			ON a.id = i.id
			ORDER BY a.id DESC 
			LIMIT 0, 1');
			
			foreach ($nvl_carte as $key => $value){ ?>
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
				<a href="index.php">Retour</a> a la page principale
		<?php } ?>
	</body>
</html>









