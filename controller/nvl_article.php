<?php
ob_start();

include ('../header.php');

include ('../vue/nvl_article_vue.php');

include ('../model/nvl_article_post.php');

if (isset($_FILES['source']) AND $_FILES['source']['error'] == 0){
    // Testons si le fichier n'est pas trop gros

   if ($_FILES['source']['size'] <= 2000000){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['source']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)){
         	
         	createArt($_POST['titre'], $_POST['accroche'], $_FILES['source']);
		}
	}
header('Refresh: 1; index.php');
ob_end_flush();
}