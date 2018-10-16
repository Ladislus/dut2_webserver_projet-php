<html>
  <head>
    <title>
      Liste des éditeurs
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/png" href="https://vignette.wikia.nocookie.net/nintendo/images/0/08/Kirby_Portal_Icon.png/revision/latest?cb=20120502060006&path-prefix=en" />
  </head>
  <body>
    <header>
      <div id="leftside">
        <img src="image/logo.png">
        <h1>GameLand<h1>
      </div>
      <!-- Liens -->
      <div id="rightside">
        <div id="liens">
          <a id="lien" href="listeEditeur.php">Accéder aux éditeurs</a>
          <a id="lien" href="listeJeu.php">Accéder aux jeux</a>
          <a id="lien" href="listeTheme.php">Accéder aux thèmes</a>
          <a id="lien" href="listeGenre.php">Accéder aux genres</a>
        </div>
        <a id="ajouter" href="ajouterJeu.php">Ajouter un jeu</a>
      </div>
    </header>
    <h1>
      Liste de tous les éditeurs
    </h1>
    <?php
    require("connect.php");
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
    $sql="SELECT * from EDITEUR";
    if(!$connexion->query($sql)) echo "Pb d'accès à la liste";
    else{
      ?>
      <dl>
        <?php
        foreach ($connexion->query($sql) as $row)
        echo "<dt style='font-style:italic'>".$row['NOME']."</dt><dd>".$row['SIEGESOCIETE']." créé en ".$row['DATECREATION']." ETAT: ".$row['ETAT']."</dd></dt>\n<br>";
      ?>
      </dl>
    <?php } ?>
  </body>
</html>
