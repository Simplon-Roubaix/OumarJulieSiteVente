<?php 
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root','root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if (isset($_FILES['source']) AND $_FILES['source']['error'] == 0){
    // Testons si le fichier n'est pas trop gros

   if ($_FILES['source']['size'] <= 2000000){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['source']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

         if (in_array($extension_upload, $extensions_autorisees)){
            
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

          }
      }
  }

// affichage sur l'index
header('Location:index.php');