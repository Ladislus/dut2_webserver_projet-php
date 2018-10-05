<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
    <header>
      <img src="http://www.webzeen.fr/wp-content/uploads/2016/03/Banni%C3%A8re-Jeux-vid%C3%A9os.png">
    </header>
    <?php
      require("connect.php");
      $dsn="mysql:dbname=".BASE.";host=".SERVER;
      try{ $connexion = new PDO($dsn, USER, PASSWD); }
      catch(PDOException $e){
          printf("Échec de la connexion : %s\n", $e->getMessage());
          exit(); }

    $titre = $_GET['rechercheTitre'];
    $sql = "SELECT * FROM JEU NATURAL JOIN ESTEDITER NATURAL JOIN EDITEUR WHERE NOMJ LIKE '%$titre%'";
    if(!$connexion->query($sql)) echo "Pb d'accès au JEU";
    else {
      if(!empty($connexion->query($sql))) {
          foreach ($connexion->query($sql) as $row){
          $date = date("d/m/Y", strtotime($row['DATESORTIE']));
          echo $row['NOMJ']." sortie le ".$date." édité par ".$row['NOME']."<br/>\n";
        }
       }
      else { echo "Pas de resultat !"; }}
    ?>
  </body>
</html>
