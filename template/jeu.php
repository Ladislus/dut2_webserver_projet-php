<?php

  #Infos de connexion à la BD
  require("../connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  $id = $_GET['id'];

  $genre = "";
  $sql = "SELECT DISTINCT NOMGENRE
          FROM JEU NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE
          WHERE IDJ = '$id'";
  foreach ($connexion->query($sql) as $row) {
    if(empty($genre)) { $genre = $row['NOMGENRE']; }
    else { $genre = $genre.", ".$row['NOMGENRE']; }}

  $theme = "";
  $sql = "SELECT DISTINCT NOMTHEME
          FROM JEU NATURAL JOIN ESTEDITER NATURAL JOIN EDITEUR NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE NATURAL JOIN ESTDUTHEME NATURAL JOIN THEME
          WHERE IDJ = '$id'";
  foreach ($connexion->query($sql) as $row) {
    if(empty($theme)) { $theme = $row['NOMTHEME']; }
    else { $theme = $theme.", ".$row['NOMTHEME']; }}

  $sql = "SELECT DISTINCT IDJ, NOMJ, DATESORTIE, NOME, DESCJ
          FROM JEU NATURAL JOIN ESTEDITER NATURAL JOIN EDITEUR NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE NATURAL JOIN ESTDUTHEME NATURAL JOIN THEME
          WHERE IDJ = '$id'";

  if(!$connexion->query($sql)) echo "Pb d'accès à la BD";
  else {
    $result = $connexion->query($sql)->fetch();
    echo "<div class=\"left\">\n";
    echo "<img id=\"image\" src=\"image/jeu/".$result['IDJ'].".png\">\n";
    echo "</div>\n";
    echo "<div class=\"right\">\n";
    echo "<p id=\"name\">Titre: ".$result['NOMJ']."</p>\n";
    echo "<p id=\"sortie\">Date de sortie: ".$result['DATESORTIE']."</p>\n";
    echo "<p id=\"editeur\">Editer par: ".$result['NOME']."</p>\n";
    echo "<p id=\"genre\">Genre: ".$genre."</p>\n";
    echo "<p id=\"theme\">Thème: ".$theme."</p>\n";
    echo "<p id=\"desc\">".$result['DESCJ']."</p>\n";
    echo "</div>"; }
?>
