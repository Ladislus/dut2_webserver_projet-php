<?php

  #Infos de connexion à la BD
  require_once("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  var_dump($_GET);

  $nom = $_GET['nom'];
  $siege = $_GET['siege'];
  $date = $_GET['date'];
  $etat = $_GET['etat'];
  $desc = $_GET['desc'];

  $sql = $connexion->prepare("INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE) VALUES (:name, :siege,:datecreation, :etat, :description)");
  $sql->bindParam(':name', $nom);
  $sql->bindParam(':siege', $siege);
  $sql->bindParam(':datecreation', $date);
  $sql->bindParam(':etat', $etat);
  $sql->bindParam(':description', $desc);
  var_dump($sql->execute());

  header('Location:../index.php');

?>
