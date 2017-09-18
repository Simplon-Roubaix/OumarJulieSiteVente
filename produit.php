<?php
 try {
   $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
 }




// include "Reference.php";
include("header.php"); ?>

<?php
$article = $_GET['article'];

 $reponse = $bdd->prepare('SELECT * FROM articles WHERE id=?');
 $reponse->execute([$article]);
 $produit= $reponse->fetch();
 {
?>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="produit" class="col lg-6 md-6 xs-6" style="width: 15 rem;">
          <!-- <img class="card-img" src="<?php echo $Reference[$article]['Image']; ?>" alt="Card image cap"> -->
        </div>

        <div class="col lg-4 md-4 xs-4">

          <h2 id="H2"><?php echo $produit['titre']; ?></h2><br/ >

    <p><?php echo $produit['description'];?></p>
    <br>
    <p><?php echo $produit['accroche'];?></p>

<a href="" class="btn btn-primary">AJOUTER AU PANIER</a>

  </div>
      </div>
    </div>

      <?php
    }
    include("footer.php");
     ?>
