<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());

}

$req = $bdd->prepare('INSERT INTO articles (titre, accroche, description)
             VALUES(:titre, :accroche, :description )');


$req->execute(array(
        'titre' => $_POST['titre'],
        'accroche' => $_POST['accroche'],
        'description' => $_POST['description']
        ));

        // $card = $bdd->query('SELECT * from article');
        //         while ($value = $card->fetch())
        //             {
 ?>

 <?php

       if (isset($_FILES['source']) AND $_FILES['source']['error'] == 0)
        {
                if ($_FILES['source']['size'] <= 1000000)
                {
                        $infossource = pathinfo($_FILES['source']['name']);
                        $extension_upload = $infossource['extension'];
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        if (in_array($extension_upload, $extensions_autorisees))
                        {
                                move_uploaded_file($_FILES['source']['tmp_name'], 'img/' . basename( $_FILES['source']['name']));
                                echo "L'envoi a bien été effectué !";
                                $req = $bdd->prepare('INSERT INTO images (source, alt) VALUES(:source, :alt)');
                                $req->execute(array(
                                    'source' => 'img/' . basename($_FILES['source']['name']),
                                    'alt' => 'Image bonbon'

                                    ));
                        }
                }
        }

        $images = $bdd -> query('SELECT *
        FROM articles a
        INNER JOIN images i
        ON a.id = i.id');

        foreach ($images as $key => $value) {
               ?>

               <article class="card" style="width: 20rem;">
                    <figure class="imageBonbon">
                      <img class="card-img-top" src=<?php echo $value['source']?> alt=<?php echo $value['alt'] ?>>
                    </figure>
        			  <div class="card-block">
                        <h4 class="card-title"><?php echo $value['titre']?></h4>
                        <p class="card-text"><?php echo $value['accroche']?></p>
        			    <a href="produit.php?id=<?php echo $value['id']?>" class="btn btn-primary">Voir plus</a>
        			  </div>
        		</article>
<?php
 }?>
