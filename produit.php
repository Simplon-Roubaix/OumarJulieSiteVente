<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nos Bonbons</title>
  </head>
  <body>


    <?php
    include "Reference.php";
    	 ?>


<?php //include("header.php"); ?>
<?php //include("footer.php"); ?>

<article class="card" style="width: 20rem;">
  <figure class="imageBonbon">
    <img class="card-img-top" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
  </figure>
    <!-- <div class="card-block">
      <h4 class="card-title"><?php echo $value['Titre']?></h4>
      <p class="card-text"><?php echo $value['Description']?></p>
    </div> -->
</article>


  </body>
</html>
