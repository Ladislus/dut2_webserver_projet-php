<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/liste/genre-theme.css\">";
  echo "<title>Les genres</title>";

  include "../template/banniere.php";

  #Infos de connexion à la BD
  require_once("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  echo "<div class='corps'>\n";

  $sql = "SELECT IDG, NOMGENRE FROM GENRE ORDER BY NOMGENRE ASC";
  foreach($connexion->query($sql) as $row) {
    echo "<h1>".$row['NOMGENRE']."</h1>\n";
    echo "<div class=\"objet\">\n";
    $lesJeu = "SELECT IDJ, NOMJ
               FROM JEU NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE
               WHERE IDG = ".$row['IDG'];
      if (empty($connexion->query($lesJeu)->fetch())) {
        echo "<p> Aucun jeu de ce genre</p>\n"; }
        else {
          foreach ($connexion->query($lesJeu) as $jeu) {
            echo "<div class=\"item\">\n";
              echo "<div class='image'>\n";
                echo "<img src=\"../image/jeu/".$jeu['IDJ'].".png\">\n";
              echo "</div>\n";
              echo "<a href='../template/jeu.php?id=".urlencode($jeu['IDJ'])."'>".$jeu['NOMJ']."</a><br/>\n";
            echo "</div><br>\n"; }}
        echo "</div>\n"; }

  echo "</div>";

?>
