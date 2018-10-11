<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="index.css">
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


  <br><a id="lien" href="listeEditeur.php">Accéder à la liste des éditeurs</a>
  <br><a id="lien" href="listeJeu.php">Accéder à la liste des jeux</a>
  <br><a id="lien" href="listeTheme.php">Accéder à la liste des thèmes</a>
  <br><a id="lien" href="listeGenre.php">Accéder à la liste des genres</a>

    <div id="resultat">
    </div>
  </body>
</html>
