<?php      
   
try //Connexion a la base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteBonbon;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function verification($pseudo, $bdd){
    $req = $bdd -> prepare('SELECT pseudo 
    	FROM login 
    	WHERE pseudo = :pseudo');

    $req->execute(array(
    	'pseudo' => $pseudo
    ));
    $existe = $req->fetch();
    return $existe;
   }


function inscription ($pseudo, $pass, $bdd){

	// Insertion du pseudo dans la base de données
    $req = $bdd->prepare('INSERT INTO login(pseudo, pass, date_inscription) 
	VALUES(:pseudo, :pass, CURDATE())');
      $req->execute(array(
      'pseudo' => $pseudo,
      'pass' => $pass
  ));
} 