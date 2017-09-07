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
include "Reference.php";
	foreach ($Reference as $key => $value) {

	 ?>

		<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="..." alt="Card image cap">
			  <div class="card-block">
			    <h4 class="card-title"><?php echo $value['Titre']?></h4>
			    <p class="card-text"><?php echo $value['Description']?></p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
<?php	}
?>
	</section>		

	</body>
</html>