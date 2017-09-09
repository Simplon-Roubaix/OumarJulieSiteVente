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
<img src="<?php echo $Reference[1]['Image']; ?>" alt="..." class="img-thumbnail">




     <!-- <figure class="imageBonbon">
        <img class="card-img-top" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
    </figure> -->

   <div id="ContainerProduit">

        <h2 id="H2"><?php echo $Reference[1]['Titre']; ?></h2><br/ >



       <p><?php echo $Reference[1]['Description'];?></p>
   </div>

  </div>


<p><?php echo $Reference[1]['Texte']; ?></p>
    <?php //include("footer.php"); ?>





  </body>
</html>
