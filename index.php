<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="image/vignette.png" />

    <script src="jquery.js"></script>
    <script>
    function reloadTitre() { $('#resultat').load('rechercher.php', { recherche: $('#rechercheTitre').val() }); }
    </script>

  </head>
  <body>

    <!-- Bannière -->
    <header>
      <img src="image/banniere.png" class="center">
    </header>

    <!-- Barre de recherche -->
    <input type="text"
           id="rechercheTitre"
           placeholder="Entrez une recherche"
           autocomplete="off"
           onkeyup="reloadTitre()" >

  <div id="resultat">
  </div>

  </body>
</html>
