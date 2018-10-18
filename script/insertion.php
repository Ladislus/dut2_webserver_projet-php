<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/insertion.css\">";
  echo "<title>Ajout</title>";
  echo "</head>";
  #include "../template/banniere.php";

  #Infos de connexion à la BD
  require("../BD/connect.php");

  #Création de la connexion
  $dsn="mysql:dbname=".BASE.";host=".SERVER;
  try{ $connexion = new PDO($dsn, USER, PASSWD); }
  catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      return; }

?>

<script src="../ressource/jquery.js"></script>
<script>

function get(nom) { return document.getElementsByName(nom)[0]; }

function insertionBD() {

  var nom = get("nomJ").value;
  if (nom.length == 0) {
    alert("Rentrez un nom !");
    get("nomJ").focus();
    return; }

  var date = get("datesortie").value;
  if (date.length == 0) {
    alert("Rensignez une date de sortie !");
    get("datesortie").focus();
    return; }

  var editeur = get("editeur").value;
  if (editeur.length == 0) {
    alert("Sélectionner un éditeur !");
    get("editeur").focus();
    return; }

  var selecteurGenre = get("genre");
  var genre = [];
  if (selecteurGenre.selectedOptions.length == 0) {
    alert("Veuillez selectionner au moins un genre !");
    selecteurGenre.focus();
    return; }
  else {
    for (i = 0; i < selecteurGenre.selectedOptions.length; i++) {
      genre.push(selecteurGenre.selectedOptions[i].value); }}

  var selecteurTheme = get("theme");
  var theme = [];
  if (selecteurTheme.selectedOptions.length == 0) {
    alert("Veuillez selectionner au moins un thème !");
    selecteurTheme.focus();
    return; }
  else {
    for (i = 0; i < selecteurTheme.selectedOptions.length; i++) {
      theme.push(selecteurTheme.selectedOptions[i].value); }}

  var desc = get("descriptionJeu").value
  if (desc.length < 10) {
    alert("Veuillez rensigner une description d'au moins 20 caractères !");
    get("descriptionJeu").focus();
    return; }

  // $.ajax({ url: 'query.php',
  //          data: { nom: nomJ,
  //                  editeur: editeurJ,
  //                  date: dateJ,
  //                  genre: genreJ,
  //                  theme: themeJ,
  //                  desc: descJ },
  //          type: 'GET',
  //          success: function() {
  //            alert("Jeu créé !");
  //            document.location.href = "../index.php"; },
  //          error: function(error) { alert(error); }});

  window.location.replace("query.php?nom=" + nom + "&editeur=" + editeur + "&date=" + date + "&genre="+ genre + "&theme=" + theme + "&desc=" + desc);

}

</script>

<p>Nom du jeu:
  <input type = "text"
         name = "nomJ"
         required pattern=[a-z]{2,100}
         placeholder="Ex: Mario">
</p>
<p>
  Date de sortie: <input type="date" name="datesortie">
</p>

<p>Editeur du jeu:
  <select name="editeur" size="1">
    <option value="" disabled selected>Selectionner un éditeur</option><br>

<?php

  $sql = "SELECT NOME FROM EDITEUR";
  foreach ($connexion->query($sql) as $row) {
      echo "<option value=\"".$row['NOME']."\">".$row['NOME']."</option><br>\n"; }

?>

</select></p>

<p>Genre(s):
  <select multiple name="genre">

<?php

  $sql = "SELECT NOMGENRE FROM GENRE";
  foreach ($connexion->query($sql) as $row) {
    echo "<option value=\"".$row['NOMGENRE']."\">".$row['NOMGENRE']."</option><br>\n"; }

?>
</select>


<p>Thème(s):
  <select multiple name="theme">

<?php

  $sql = "SELECT NOMTHEME FROM THEME";
  foreach ($connexion->query($sql) as $row) {
    echo "<option value=\"".$row['NOMTHEME']."\">".$row['NOMTHEME']."</option><br>\n"; }

?>

</select></p>

<p>Description:
  <textarea name="descriptionJeu" rows="5" cols="50" placeholder="Entrez sa description" value="">
  </textarea>
</p>

<input type="button" value="Inserer" onclick="insertionBD()">

<?php

  include "../template/footer.php";

?>