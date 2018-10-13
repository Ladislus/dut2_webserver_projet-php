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
      <div id="leftside"><img src="image/logo.png">
      <h1>GameLand<h1></div>
      <!-- Liens -->
      <div id="liens">
        <a id="lien" href="listeEditeur.php">Accéder aux éditeurs</a>
        <a id="lien" href="listeJeu.php">Accéder aux jeux</a>
        <a id="lien" href="listeTheme.php">Accéder aux thèmes</a>
        <a id="lien" href="listeGenre.php">Accéder aux genres</a>
      </div>
    </header>

    <div id="corps">
    <!-- Barre de recherche -->
      <input type="text"
            id="rechercheTitre"
            placeholder="Entrez le nom d'un jeu"
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
