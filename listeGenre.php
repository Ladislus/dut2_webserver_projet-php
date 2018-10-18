<html>
  <head>
    <title>
      Liste des genres
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/png" href="https://vignette.wikia.nocookie.net/nintendo/images/0/08/Kirby_Portal_Icon.png/revision/latest?cb=20120502060006&path-prefix=en" />
  </head>
  <body>
    <header>
      <a href="index.php"><img src="http://www.webzeen.fr/wp-content/uploads/2016/03/Banni%C3%A8re-Jeux-vid%C3%A9os.png" class="center"></a>

      <script src="jquery.js"></script>
      <script>
      function reloadTitre() { $('#resultat').load('rechercherGenre.php', { rechercheGenre: $('#rechercheGenre').val() }); }
      </script>
    </header>
    <h1>
      Liste de tous les genres
    </h1>
    <input type="text"
           id="rechercheGenre"
           placeholder="Entrez le nom d'un genre"
           autocomplete="off"
           onkeyup="reloadTitre()" >

    <?php
    require_once("connect.php");
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
    $sql="SELECT DISTINCT * from GENRE ORDER BY NOMGENRE";
    if(!$connexion->query($sql)) echo "Pb d'accès à la liste";
    else{
      ?>
      <dl>
        <?php
        foreach ($connexion->query($sql) as $row)
        echo "<dt style='font-style:italic'>".$row['NOMGENRE']."</dt>\n<br>";
      ?>
      </dl>
    <?php } ?>
    <div id="resultat">
    </div>
  </body>
</html>
