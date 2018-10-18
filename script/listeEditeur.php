<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/liste/jeu-editeur.css\">";
  echo "<title>Les editeurs</title>";

  include "../template/banniere.php";

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  echo "<div id='content'>\n";

  $sql = "SELECT IDE, NOME FROM EDITEUR ORDER BY NOME ASC";
  foreach($connexion->query($sql) as $row) {
    echo "<div id=\"editeur\">\n";
    echo "<img src=\"../image/editeur/".$row['IDE'].".png\">\n";
    echo "<a href='../template/jeu.php?id=".urlencode($row['IDE'])."'>".$row['NOME']."</a><br/>\n";
    echo "</div><br>\n"; }

  echo "</div>";

?>
