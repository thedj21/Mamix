<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Mamix</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration des CSS Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/bootstrap-theme.css" rel="stylesheet" media="screen">
<link href="../css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
</head>
<body>
<!-- Intégration du header -->

<? include ("../header.php"); ?>

<!-- Intégration du menu -->

<? include("../menu/menu.php"); ?>

<!-- Intéfration du script -->

<?php
$output = shell_exec('tail cd /var/log/messages');
echo "<pre>$output</pre>";
?>

<!-- Intégration de la libraire jQuery -->

<script src="http://code.jquery.com/jquery.js"></script>

<!-- Intégration de la libraire de composants du Bootstrap -->

<script src="js/bootstarp.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html> 
