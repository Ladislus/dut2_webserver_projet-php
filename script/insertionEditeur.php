<?php

  include "../template/header.php";

  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/insertion.css\">";
  echo "<title>Ajout d'un éditeur</title>";

  include "../template/banniere.php";

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

  var nom = get("nomE").value;
  if (nom.length == 0) {
    alert("Rentrez un nom !");
    get("nomE").focus();
    return; }

  var siege = get("siegeE").value;
  if (siege.length == 0) {
    alert("Veuillez rentrer un siège sociale !");
    get("siegeE").focus();
    return; }

  var date = get("datecreation").value;
  if (date.length == 0) {
    alert("Renseignez une date de création !");
    get("datecreation").focus();
    return; }

  var selecteurEtat = get("etat");
  if (selecteurEtat.value.length == 0) {
    alert("Veuillez selectionner un état !");
    selecteurEtat.focus();
    return; }
  else {
    etat = selecteurEtat.value}


  var desc = get("descriptionEditeur").value
  if (desc.length < 10) {
    alert("Veuillez renseigner une description d'au moins 20 caractères !");
    get("descriptionEditeur").focus();
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

  window.location.replace("queryEditeur.php?nom=" + nom + "&siege=" + siege + "&date=" + date + "&etat=" + etat + "&desc=" + desc); }

</script>
<div class="corps">
  <div class="infos">
    <div class="left">
      <p>Nom de l'éditeur:<br>
        <input type = "text"
               name = "nomE"
               required pattern=[a-z]{2,100}
               placeholder="Ex: SEGA">
      </p>

      <p>
        Date de création:<br>
        <input type="date" name="datecreation">
      </p>

      <p>Description:<br>
        <textarea name="descriptionEditeur" rows="5" cols="50" placeholder="Entrez sa description" value="">
        </textarea>
      </p>

    </div>
    <div class="right">
      <p>Siège social:<br>
        <input type = "text"
               name = "siegeE"
               required pattern=[a-z]{2,100}
               placeholder="Ex: Tokyo">
      </p>

      <p>Etat:<br>
      <select name="etat">
        <option value="" disabled selected>Veuillez selectionner un état</option>
        <option value="OUVERT">Ouvert</option>
        <option value="FERME">Fermé</option>
      </select></p>
    </div>
  </div>

  <input type="button" value="Insérer" onclick="insertionBD()">
</div>
<?php

  include "../template/footer.php";

?>
