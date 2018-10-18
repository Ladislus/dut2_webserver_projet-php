<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/liste/jeu-editeur.css\">";
  echo "<title>Les éditeurs</title>";

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
    $sql = "SELECT IDE, NOME FROM EDITEUR WHERE NOME LIKE '$char%' ORDER BY NOME ASC";
    if($connexion->query($sql)->fetch()) {
      echo "<h1>".$char."</h1>\n";
      echo "<div class=\"objet\">\n";
      foreach($connexion->query($sql) as $row) {
        echo "<div class=\"item\">\n";
          echo "<div class='image'>\n";
            echo "<img src=\"../image/editeur/".$row['IDE'].".png\">\n";
          echo "</div>";
            echo "<div class='text'>\n";
          echo "</div>";
          echo "<a href='../template/editeur.php?id=".urlencode($row['IDE'])."'>".$row['NOME']."</a><br/>\n";
        echo "</div>\n"; }
      echo "</div>"; }}

  echo "</div>";

?>
