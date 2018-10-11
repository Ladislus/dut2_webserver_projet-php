<html>
  <head>
    <title>
      Nintendo
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="pageLien.css">
    <link rel="shortcut icon" type="image/png" href="https://vignette.wikia.nocookie.net/nintendo/images/0/08/Kirby_Portal_Icon.png/revision/latest?cb=20120502060006&path-prefix=en" />
  </head>
  <body>
    <header>
      <img src="https://www.soccerbbc.com/wp-content/uploads/2017/04/how-to-get-a-job-as-a-video-game-tester-volt-blog-throughout-video-game-banner.jpg" class="center">
    </header>
    </article>
    <?php
    require("connect.php");
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
    $sql="SELECT * from EDITEUR NATURAL JOIN ESTEDITER NATURAL JOIN JEU where NOME = 'Nintendo'";
    if(!$connexion->query($sql)) echo "Pb d'accès à la liste";
    else{
      ?>
      <dl>
        <?php
        foreach ($connexion->query($sql) as $row)
        echo "<h1>".$row['NOME']."</h1>";
        echo "<article><p>";
        echo "<h3>Léger résumé de l'entreprise</h3>";
        echo "".$row['DESCE']."<p>";
        echo "<h3>Voici la liste des jeux que ".$row['NOME']." à sorti jusqu'à ce jour</h3>";
        echo "<ul><li>".$row['NOMJ']."\n<br></li>";
        echo "</ul>";
      ?>
      </dl>
    <?php } ?>
  </body>
</html>
