<?php

  #Infos de connexion à la BD
  require("../BD/connect.php");

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
      echo "<a href='template/jeu.php?id=".urlencode($row['IDJ'])."'>".$row['NOMJ']."</a><br/>\n"; }}}

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
      echo "<a href='template/editeur.php?id=".urlencode($row['IDE'])."'>".$row['NOME']."</a><br/>\n"; }}}

?>
