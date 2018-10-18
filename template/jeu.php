<script src="../ressource/jquery.js"></script>
<script>

  function suppressionBD() {
    var id = "<?php echo $_GET['id']; ?>";
    window.location.replace("../script/suppressionJeu.php?id=" + id); }

</script>

<?php

  include 'header.php';

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit(); }

  $id = $_GET['id'];

  $genre = "";
  $sql = "SELECT DISTINCT NOMGENRE
          FROM JEU NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE
          WHERE IDJ = '$id'";
  foreach ($connexion->query($sql) as $row) {
    if(empty($genre)) { $genre = $row['NOMGENRE']; }
    else { $genre = $genre.", ".$row['NOMGENRE']; }}

  $theme = "";
  $sql = "SELECT DISTINCT NOMTHEME
          FROM JEU NATURAL JOIN ESTEDITE NATURAL JOIN EDITEUR NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE NATURAL JOIN ESTDUTHEME NATURAL JOIN THEME
          WHERE IDJ = '$id'";
  foreach ($connexion->query($sql) as $row) {
    if(empty($theme)) { $theme = $row['NOMTHEME']; }
    else { $theme = $theme.", ".$row['NOMTHEME']; }}

  $sql = "SELECT DISTINCT NOMJ, DATESORTIE, IDE, NOME, DESCJ
          FROM JEU NATURAL JOIN ESTEDITE NATURAL JOIN EDITEUR NATURAL JOIN ESTDUGENRE NATURAL JOIN GENRE NATURAL JOIN ESTDUTHEME NATURAL JOIN THEME
          WHERE IDJ = '$id'";

  if(!$connexion->query($sql)) echo "Pb d'accès à la BD";
  else {
    $result = $connexion->query($sql)->fetch();

    echo "<title>".$result['NOMJ']."</title>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/jeu.css\">";
    include "banniere.php";
    echo "<div class=\"corps\">\n";
    echo "<div class=\"infos\">\n";
    echo "<div class=\"left\">\n";
    echo "<img src=\"../image/jeu/".$id.".png\">\n";
    echo "</div>\n";
    echo "<div class=\"right\">\n";
    echo "<p><b>Titre:</b> ".$result['NOMJ']."</p>\n";
    echo "<p><b>Date de sortie:</b> ".$result['DATESORTIE']."</p>\n";
    echo "<p><b>Editer par:</b> <a href='editeur.php?id=".urlencode($result['IDE'])."'>".$result['NOME']."</a></p>\n";
    echo "<p><b>Genre(s):</b> ".$genre."</p>\n";
    echo "<p><b>Thème(s):</b> ".$theme."</p>\n";
    echo "<p>".$result['DESCJ']."</p>\n";
    echo "</div>\n";
    echo "</div>\n";
    echo "<input type=\"button\" value=\"Supprimer\" onclick=\"suppressionBD()\">";
    echo "</div>\n";}

    include "footer.php";
?>
