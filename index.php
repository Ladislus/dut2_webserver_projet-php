<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/png" href="/image/vignette.png" />
=======
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="image/vignette.png" />
>>>>>>> d31f09e60bb157b0c2f9aa0811c38ed699343561

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

<<<<<<< HEAD
      <div id="resultat">
      </div>
    </div>
=======
  <div id="resultat">
  </div>
>>>>>>> d31f09e60bb157b0c2f9aa0811c38ed699343561

    <footer>
      <small>&copy; Copyright 2018, Tous droits réservés, CHARLOTTE, DUPRE, WALCAK</small>
    </footer>
  </body>
</html>
