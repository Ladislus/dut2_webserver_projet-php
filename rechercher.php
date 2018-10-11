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
    echo $row['NOMJ']."<br/>\n"; }}}

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
      echo $row['NOME']."<br/>\n"; }}}

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
      echo $row['NOMGENRE']."<br/>\n"; }}}

  #Query "THEME" dans la BD
  $sql = "SELECT * FROM THEME WHERE NOMTHEME LIKE '%$recherche%'";
  #Lancement de $sql
  if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
  else {
    if(($connexion->query($sql)->rowCount() == 0) or empty($recherche)) { echo ""; }
    else {
        echo "<h1> GENRE </h1>";
    # Affichage des jeux
    foreach ($connexion->query($sql) as $row) {
      echo $row['NOMTHEME']."<br/>\n"; }}}
?>
