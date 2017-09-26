<section class="row col-md-8 col-md-offset-2 registeration">
    
        <article class="registerInner">
            <h3 class="headerSign">Votre article</h3>
                    
            <form class="col-md-10" action="../controller/nvl_article.php" method="post" enctype="multipart/form-data">

                    <input class="form-control" type="varchar" name="titre" placeholder="Titre">

                    <input class="form-control" type="varchar" name="accroche" placeholder="Phrase d'accroche">

<!--                     <input class="form-control" type="text" name="texte" placeholder="Texte"> -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="400000" />
                    <input class="form-control" type="file" name="source" placeholder="img ...">

                <button type="submit" class="signbuttons btn btn-primary">Publier</button>

            </form>
        </article>    
    </section>