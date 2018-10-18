<?php

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  $nom = $_GET['nom'];
  $editeur = $_GET['editeur'];
  $date = $_GET['date'];
  $genre = $_GET['genre'];
  $theme = $_GET['theme'];
  $desc = $_GET['desc'];

  $sql = $connexion->prepare("INSERT INTO JEU (NOMJ, DATESORTIE, DESCJ) VALUES (:name, :datesortie, :description)");
  $sql->bindParam(':name', $nom);
  $sql->bindParam(':datesortie', $date);
  $sql->bindParam(':description', $desc);
  $sql->execute();

  $idJ = $connexion->query("SELECT IDJ FROM JEU WHERE NOMJ = '".$nom."'")->fetch()[0];
  $idE = $connexion->query("SELECT IDE FROM EDITEUR WHERE NOME = '".$editeur."'")->fetch()[0];

  $sql = $connexion->prepare("INSERT INTO ESTEDITE (IDJ, IDE) VALUES (:idJ, :idE)");
  $sql->bindParam(':idJ', $idJ);
  $sql->bindParam(':idE', $idE);
  $sql->execute();

  $genre = explode(",", $genre);
  $sql = $connexion->prepare("INSERT INTO ESTDUGENRE (IDJ, IDG) VALUES (:idJ, :idG)");
  $sql->bindParam(':idJ', $idJ);
  foreach ($genre as $row) {
    $idG = $connexion->query("SELECT IDG FROM GENRE WHERE NOMGENRE = '".$row."'")->fetch()[0];
    $sql->bindParam(':idG', $idG);
    $sql->execute(); }

  $theme = explode(",", $theme);
  $sql = $connexion->prepare("INSERT INTO ESTDUTHEME (IDJ, IDT) VALUES (:idJ, :idT)");
  $sql->bindParam(':idJ', $idJ);
  foreach ($theme as $row) {
    $idT = $connexion->query("SELECT IDT FROM THEME WHERE NOMTHEME = '".$row."'")->fetch()[0];
    $sql->bindParam(':idT', $idT);
    $sql->execute(); }

  header('Location:../index.php');

?>
