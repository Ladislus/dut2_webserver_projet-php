<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter un jeu</title>
</head>
<body>
  <header>
    <h1>Ajouter un jeu</h1>
  </header>
  <form action="reponse0.php" method="GET">
    <p>
      Nom du jeu: <input type = "text"
                  name = "nomJ"
                  required pattern=[a-z]{2,20}
                  placeholder="Mario"
    </p>

    <p>
      Editeur du jeu: <input type = "text"
                  name = "nomE"
                  required pattern=[a-z]{2,20}
                  placeholder="Nintendo"
    </p>
