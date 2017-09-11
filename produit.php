

<?php
include "Reference.php";
include("header.php"); ?>





<!-- <div id="produit">
<img src="<?php echo $Reference[1]['Image']; ?>" alt="..." class="img-thumbnail"> -->




     <!-- <figure class="imageBonbon">
        <img class="card-img-top" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
    </figure> -->

   <!-- <div id="ContainerProduit">

        <h2 id="H2"><?php echo $Reference[1]['Titre']; ?></h2><br/ ><hr>



       <p><?php echo $Reference[1]['Description'];?></p>
   </div>

  </div>

<br/ ><hr>

<p><?php echo $Reference[1]['Texte']; ?></p> -->



    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="produit" class="col lg-6 md-6 xs-6" style="width: 15 rem;">
          <img class="card-img" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
        </div>

        <div class="col lg-4 md-4 xs-4">

          <h2 id="H2"><?php echo $Reference[1]['Titre']; ?></h2><br/ >

    <p><?php echo $Reference[1]['Description'];?></p>
    <br>
    <p><?php echo $Reference[1]['Texte'];?></p>

        </div>


      </div>
    </div>

      <?php include("footer.php"); ?>

    <!-- <div id="produit" class="card" style="width: 20rem;">
      <img class="card-img-top" src="<?php echo $Reference[1]['Image']; ?>" alt="Card image cap">
      <div id="ContainerProduit" class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div> -->
