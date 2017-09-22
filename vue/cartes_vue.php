       <section id="cartes">

<?php foreach ($cartes as $key => $value) {
       ?>
       <article class="card" style="width: 20rem;">
            <figure class="imageBonbon">
              <img class="card-img-top" src="<?php echo $value['source']?>" alt="<?php echo $value['alt'] ?>">
            </figure>
			  <div class="card-block">
                <h4 class="card-title"><?php echo $value['titre']?></h4>
                <p class="card-text"><?php echo $value['accroche']?></p>
			    <a href="produit.php?id=<?php echo $value['id']?>" class="btn btn-primary">Voir plus</a>
			  </div>
		</article>
<?php } ?>
</section>