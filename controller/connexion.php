<?php session_start();

include '../model/connexion_post.php';

if (!empty($_POST['pseudo']) && !empty($_POST['pass'])){
$_SESSION['pseudo'] = $_POST['pseudo'];

$pass_hache = sha1($_POST['pass']);
$resultat = connexion($_POST['pseudo'], $_POST['pass'], $bdd);
	if($resultat['pass'] == $pass_hache){
     ob_start();
     header('Location:index.php');
     ob_end_flush();
	}
	else{
		echo'non';
	}
}
include '../vue/connexion_vue.php';

?>