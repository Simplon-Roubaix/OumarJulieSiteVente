<?php 
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root','root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function createArt($titre, $accroche, $source){
	global $bdd;

// Envoi des données de l'article
			$nvl_article = $bdd -> prepare('INSERT INTO articles (titre, accroche) VALUES (:titre, :accroche)');
			
			$nvl_article -> execute(array(
				'titre' => $titre,
				'accroche' => $accroche
				));

// ajout de l'image dans dossier image
	move_uploaded_file($source['tmp_name'], '../img/' . basename($source['name']));

// Envoi des données de l'image
	$nvl_img = $bdd -> prepare('INSERT INTO images (source, alt) VALUES (:source, :alt)');

	$nvl_img -> execute (array(
		'source' => 'img/' . basename($source['name']),
		'alt' => 'description de l\'image'
		));
}






