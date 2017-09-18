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
    <body>
      
        <!-- Formulaire html -->
      <section id="connexion" class="col-md-4">
        <article class="login-panel panel panel-default">
            <h3 class="panel-title">Connexion</h3>
            <div class="panel-body">
                <form method="post" action="connexion_post.php">
                  <div class="form-group">
                      <input class="form-control" placeholder="Pseudo" name="pseudo" type="varchar" value="">
                  </div> 
                  <div class="form-group">
                      <input class="form-control" placeholder="Mot de passe" name="pass" type="password" value="">
                  </div>
                  <input type="submit" name="inscrire">
                </form>
            </div>
        </article>
      </section>


</section>
</body>
</html>

