<!doctype html>
<html>
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
    <body id="new_article">
    <section class="row col-md-8 col-md-offset-2 registeration">
    
        <article class="registerInner">
            <h3 class="headerSign">Votre article</h3>
                    
            <form class="col-md-10" action="new_article_post.php" method="post" enctype="multipart/form-data">

                    <input class="form-control" type="varchar" name="titre" placeholder="Titre">

                    <input class="form-control" type="varchar" name="accroche" placeholder="Phrase d'accroche">

<!--                     <input class="form-control" type="text" name="texte" placeholder="Texte"> -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="123456" />
                    <input class="form-control" type="file" name="source" placeholder="img ...">

                <button type="submit" class="signbuttons btn btn-primary">Publier</button>

            </form>
        </article>    
    </section>
    </body>
    </html>