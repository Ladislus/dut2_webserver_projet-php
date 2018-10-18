<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/liste/jeu-editeur.css\">";
  echo "<title>Les jeux</title>";

  include "../template/banniere.php";

  #Infos de connexion à la BD
  require_once("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  echo "<div class=\"corps\">\n";

  $lettres = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
  foreach($lettres as $char) {
    $sql = "SELECT IDJ, NOMJ FROM JEU WHERE NOMJ LIKE '$char%' ORDER BY NOMJ ASC";
    if($connexion->query($sql)->fetch()) {
      echo "<h1>".$char."</h1>\n";
      echo "<div class=\"objet\">\n";
      foreach($connexion->query($sql) as $row) {
        echo "<div class=\"item\">\n";
          echo "<div class='image'>\n";
            echo "<img src=\"../image/jeu/".$row['IDJ'].".png\">\n";
          echo "</div>";
          echo "<div class='text'>\n";
            echo "<a href='../template/jeu.php?id=".urlencode($row['IDJ'])."'>".$row['NOMJ']."</a><br/>\n";
          echo "</div>";
        echo "</div>\n"; }
      echo "</div>"; }}

  echo "</div>";

?>
