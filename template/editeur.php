<?php

  include 'header.php';

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  $id = $_GET['id'];

  $jeu = "";
  $sql = "SELECT DISTINCT IDJ, NOMJ
          FROM JEU NATURAL JOIN ESTEDITER NATURAL JOIN EDITEUR
          WHERE IDE = '$id'";

  if (!$connexion->query($sql)->fetch()) { $jeu = "Aucun jeu n'a été ajouté à cet éditeur.\n"; }
  else {
    foreach ($connexion->query($sql) as $row) {
      $jeu = $jeu."<a href='jeu.php?id=".urlencode($row['IDJ'])."'>".$row['NOMJ']."</a><br/>\n"; }}

  $sql = "SELECT DISTINCT NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE
          FROM EDITEUR
          WHERE IDE = '$id'";

  if(!$connexion->query($sql)) echo "Pb d'accès à la BD";
  else {
    $result = $connexion->query($sql)->fetch();
    echo "<title>".$result['NOME']."</title>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/editeur.css\">";
    include "banniere.php";
    echo "<div class=\"corps\">\n";
    echo "<div class=\"infos\">\n";
    echo "<div class=\"left\">\n";
    echo "<img id=\"image\" src=\"../image/editeur/".$id.".png\">\n";
    echo "</div>\n";
    echo "<div class=\"right\">\n";
    echo "<p><b>Nom:</b> ".$result['NOME']."</p>\n";
    echo "<p><b>Date de création:</b> ".$result['DATECREATION']."</p>\n";
    echo "<p><b>Siège social:</b> ".$result['SIEGESOCIETE']."</p>\n";
    echo "<p><b>Status:</b> ".$result['ETAT']."</p>\n";
    echo "<p>".$result['DESCE']."</p>\n";
    echo "<p><b>Jeu de cet éditeur:</b></p>";
    echo "<p>".$jeu."</p>";
    echo "</div>\n";
    echo "</div>\n";
    echo "</div>\n"; }

    include "footer.php";
?>
