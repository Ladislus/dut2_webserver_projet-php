<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="image/vignette.png" />

    <script src="ressource/jquery.js"></script>
    <script>
    function reloadTitre() { $('#resultat').load('script/rechercher.php', { recherche: $('#recherche').val() }); }
    </script>

  </head>
  <body>

    <!-- Bannière -->
    <header>
      <a href="index.php">
        <div id="leftside">
          <img src="image/logo.png">
          <h1>GameLand<h1>
        </div>
      </a>
      <!-- Liens -->
      <div id="liens">
        <a id="lien" href="script/listeJeu.php">Accéder aux jeux</a>
        <a id="lien" href="script/listeEditeur.php">Accéder aux éditeurs</a>
        <a id="lien" href="script/listeTheme.php">Accéder aux thèmes</a>
        <a id="lien" href="script/listeGenre.php">Accéder aux genres</a>
      </div>
      <div id="bouton">
        <a id="ajouter" href="script/insertionJeu.php">Ajouter un jeu</a>
        <a id="ajouter" href="script/insertionEditeur.php">Ajouter un éditeur</a>
      </div>
    </header>

    <div class="corps">
    <!-- Barre de recherche -->
      <input type="text"
            id="recherche"
            placeholder="Entrez votre recherche"
            autocomplete="off"
            onkeyup="reloadTitre()" >

      <div id="resultat">
      </div>
      
      <h1>Quelques jeux:</h1><br>
      <div class="latest">

<?php

  #Infos de connexion à la BD
  require_once("BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  $sql = "SELECT IDJ, NOMJ FROM JEU";
  $res = $connexion->query($sql)->fetchAll();

  $ints = [];
  while (sizeof($ints) < 3) {
    $i = random_int(0, sizeof($res) - 1);
    if (!in_array($i, $ints)) { array_push($ints, $i); }}
  foreach ($ints as $value) {
    echo "<div class=\"last\">\n";
    echo "<img src=\"image/jeu/".$res[$value]['IDJ']."\">\n";
    echo "</div>\n"; }

?>

      </div>
    </div>

    <footer>
      <small>&copy; Copyright 2018, Tous droits réservés, CHARLOTTE, DUPRE, WALCAK</small>
    </footer>
  </body>
</html>
