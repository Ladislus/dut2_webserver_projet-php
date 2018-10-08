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
      <img src="http://www.webzeen.fr/wp-content/uploads/2016/03/Banni%C3%A8re-Jeux-vid%C3%A9os.png" class="center">
    </header>

    <!-- Barre de recherche -->
    <input type="text"
           id="rechercheTitre"
           placeholder="Entrez le nom d'un jeu"
           autocomplete="off"
           onkeyup="reloadTitre()" >


  <br><a id="lien" href="listeEditeur.php">Accéder à la liste des éditeurs</a>
  <br><a id="lien" href="listeJeu.php">Accéder à la liste des jeux</a>
  <br><a id="lien" href="listeTheme.php">Accéder à la liste des thèmes</a>
  <br><a id="lien" href="listeGenre.php">Accéder à la liste des genre</a>

    <div id="resultat">
    </div>
  </body>
</html>
