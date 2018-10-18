<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="image/vignette.png" />

    <script src="ressource/jquery.js"></script>
    <script>
    function reloadTitre() { $('#resultat').load('script/rechercher.php', { recherche: $('#recherche').val() }); }
    </script>

  </head>
  <body>

    <?php include "template/banniere.php"; ?>

    <div class="corps">
    <!-- Barre de recherche -->
      <input type="text"
            id="recherche"
            placeholder="Entrez votre recherche"
            autocomplete="off"
            onkeyup="reloadTitre()" >

      <div id="resultat">
      </div>
    </div>

    <footer>
      <small>&copy; Copyright 2018, Tous droits réservés, CHARLOTTE, DUPRE, WALCAK</small>
    </footer>
  </body>
</html>
