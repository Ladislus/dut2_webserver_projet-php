<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/png" href="https://vignette.wikia.nocookie.net/nintendo/images/0/08/Kirby_Portal_Icon.png/revision/latest?cb=20120502060006&path-prefix=en" />

    <script src="jquery.js"></script>
    <script>
    function reloadTitre() { $('#resultat').load('rechercher.php', { recherche: $('#rechercheTitre').val() }); }
    </script>

  </head>
  <body>

    <!-- Bannière -->
    <header>
      <img src="https://www.soccerbbc.com/wp-content/uploads/2017/04/how-to-get-a-job-as-a-video-game-tester-volt-blog-throughout-video-game-banner.jpg" class="center">
    </header>

    <!-- Liens -->
    <div id="liens">
      <a id="lien" href="listeEditeur.php">Accéder aux éditeurs</a>
      <a id="lien" href="listeJeu.php">Accéder aux jeux</a>
      <a id="lien" href="listeTheme.php">Accéder aux thèmes</a>
      <a id="lien" href="listeGenre.php">Accéder aux genres</a>
    </div>

    <div id="corps">
    <!-- Barre de recherche -->
      <input type="text"
            id="rechercheTitre"
            placeholder="Entrez le nom d'un jeu"
            autocomplete="off"
            onkeyup="reloadTitre()" >

      <br><a href="pageNintendo.php"> PAGE NINTENDO</a>

      <div id="resultat">
      </div>
    </div>

    <footer>
      <small>&copy; Copyright 2018, Tous droits réservés, CHARLOTTE, DUPRE, WALCAK</small>
    </footer>
  </body>
</html>
