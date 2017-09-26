<?php
session_start();
include '../model/inscription_post.php';

// Vérification de la validité des informations
if (!empty($_POST['pass']) || !empty($_POST['pseudo'])){
	$existe = verification($_POST['pseudo'], $bdd); // lance fonction verif pseudo & recupere $existe pour test

	if(!$existe){ // si pas d'existence de ce pseudo
		$_SESSION['pseudo'] = $_POST['pseudo'];

		// cache le mot de passe
		$pass_hache = sha1($_POST['pass']);

		inscription($_POST['pseudo'], $pass_hache, $bdd); //lance fonction envoie des donnees
		
		header('Location:index.php');
	    }
	else{
	      echo 'Ce pseudo est déja utilisé';
	}   
}
 include '../vue/inscription_vue.php';

?>