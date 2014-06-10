<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Mamix</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration des CSS Bootstrap -->
<link href="/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<? include ("header.php"); ?>
<!-- <link href="/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> --!>
</head>
<body>

<!-- Intégration du menu -->
<? include("menu/menu.php"); ?>

<div class="jumbotron">
<div class="container">
  <h1>Bienvenue dans le panel Mamix</h1>
  <p>Vous êtes dans le panel de gestion de votre serveur.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Cliquer ici ça fera rien :O</a></p>
</div>
</div>
<!-- Intégration du header -->

<!-- Intégration du footer -->
<? include ("footer.php"); ?>

<!-- Intégration de la libraire jQuery -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="/bootstrap-3.1.1-dist/js/bootstarp.js"></script>
<script src="/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</body>
</html> 
