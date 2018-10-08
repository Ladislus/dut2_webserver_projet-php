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
$rechercheGenre = $_POST['rechercheGenre'];

#Query "JEU" dans la BD
$sql = "SELECT DISTINCT * FROM GENRE NATURAL JOIN ESTDUGENRE NATURAL JOIN JEU WHERE NOMGENRE LIKE '%$rechercheGenre%'";
#Lancement de $sql
if(!$connexion->query($sql)) echo "Pb d'accès au GENRE";
else {
  if(!empty($connexion->query($sql))) {
    if(empty($rechercheGenre)){ echo ""; }
    else {
      ?>
        <h1> GENRE </h1>
      <?php
      # Affichage des jeux
      foreach ($connexion->query($sql) as $row) {
        echo $row['NOMJ']."<br/>\n"; }}}}

?>
