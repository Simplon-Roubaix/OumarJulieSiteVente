<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nos Bonbons</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>


    <?php
    include "Reference.php";
    	 ?>


<?php include("header.php"); ?>

<div id="produit">


  <figure class="imageBonbon">
    <img class="card-img-top" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
  </figure>
  <h2><?php echo $Reference[1]['Titre']; ?></h2>

    <!-- <div class="card-block">
      <h4 class="card-title"><?php echo $value['Titre']?></h4>
      <p class="card-text"><?php echo $value['Description']?></p>
    </div> -->

    <p><?php echo $Reference[1]['Description'];?></p>
  </div>


<h2><?php echo $Reference[1]['Texte']; ?></h2>
    <?php //include("footer.php"); ?>





  </body>
</html>
