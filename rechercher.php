<?php

  #Infos de connexion à la BD
  require("connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  #Récupération des infos des différentes barres de recherche
  $recherche = $_POST['recherche'];

  #Query "JEU" dans la BD
  $sql = "SELECT * FROM JEU WHERE NOMJ LIKE '%$recherche%'";
  #Lancement de $sql
  if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
  else {
    if(($connexion->query($sql)->rowCount() == 0) or empty($recherche)) { echo ""; }
    else {
      echo "<h1> JEUX </h1>";
    # Affichage des jeux
    foreach ($connexion->query($sql) as $row) {
      echo "<a href='template/jeu.php?name=".urlencode($row['IDJ'])."'>".$row['NOMJ']."</a><br/>\n"; }}}

###########################################################################

  #Query "EDITEUR" dans la BD
  $sql = "SELECT * FROM EDITEUR WHERE NOME LIKE '%$recherche%'";
  #Lancement de $sql
  if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
  else {
    if(($connexion->query($sql)->rowCount() == 0) or empty($recherche)) { echo ""; }
    else {
        echo "<h1> EDITEUR </h1>";
    # Affichage des éditeurs
    foreach ($connexion->query($sql) as $row) {
      echo "<a href='template/editeur.php?name=".urlencode($row['IDE'])."'>".$row['NOME']."</a><br/>\n"; }}}

###########################################################################

  #Query "GENRE" dans la BD
  $sql = "SELECT * FROM GENRE WHERE NOMGENRE LIKE '%$recherche%'";
  #Lancement de $sql
  if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
  else {
    if(($connexion->query($sql)->rowCount() == 0) or empty($recherche)) { echo ""; }
    else {
        echo "<h1> GENRE </h1>";
    # Affichage des genres
    foreach ($connexion->query($sql) as $row) {
      echo "<a href='template/genre.php?name=".urlencode($row['IDG'])."'>".$row['NOMGENRE']."</a><br/>\n"; }}}

###########################################################################

  #Query "THEME" dans la BD
  $sql = "SELECT * FROM THEME WHERE NOMTHEME LIKE '%$recherche%'";
  #Lancement de $sql
  if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
  else {
    if(($connexion->query($sql)->rowCount() == 0) or empty($recherche)) { echo ""; }
    else {
        echo "<h1> THEME </h1>";
    # Affichage des jeux
    foreach ($connexion->query($sql) as $row) {
      echo "<a href='template/theme.php?name=".urlencode($row['IDT'])."'>".$row['NOMTHEME']."</a><br/>\n"; }}}
?>
