<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/liste/jeu-editeur.css\">";
<<<<<<< HEAD
  echo "<title>Les éditeurs</title>";
=======
  echo "<title>Les editeurs</title>";
>>>>>>> bd4a2826b0d3631421c93552a05b0a93b2d6ffb0

  include "../template/banniere.php";

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  echo "<div class=\"corps\">\n";
  echo "<div class=\"infos\">\n";
  $sql = "SELECT IDE, NOME FROM EDITEUR ORDER BY NOME ASC";
  foreach($connexion->query($sql) as $row) {
<<<<<<< HEAD
    echo "<div class=\"item\">\n";
=======
    echo "<div id=\"editeur\">\n";
>>>>>>> bd4a2826b0d3631421c93552a05b0a93b2d6ffb0
    echo "<img src=\"../image/editeur/".$row['IDE'].".png\">\n";
    echo "<a href='../template/jeu.php?id=".urlencode($row['IDE'])."'>".$row['NOME']."</a><br/>\n";
    echo "</div><br>\n"; }
  echo "</div>";
  echo "</div>";

?>
