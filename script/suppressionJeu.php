<?php

  require_once("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
    printf("Échec de la connexion : %s\n", $e->getMessage());
    exit(); }

  $id = $_GET['id'];
  var_dump($id);

  $tables = ['ESTDUGENRE', 'ESTDUTHEME', 'ESTEDITE', 'JEU'];
  foreach ($tables as $value) {
    $sql = "DELETE FROM ".$value." WHERE IDJ = ".$id;
    var_dump($sql);
    var_dump($connexion->query($sql)); }

  header('Location:../index.php');

?>
