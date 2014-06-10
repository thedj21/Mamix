<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Mamix</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration des CSS Bootstrap -->
<link href="/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<!-- Intégration du header -->
<? include ("../header.php"); ?>

<!-- Intégration du menu -->
<? include("../menu/menu.php"); ?>

<!-- Intégration du script de monitoring -->
<?php
$ps_afx = shell_exec('ps afx');
echo "<pre>$output</pre>";
?>

<?php
$htop = shell_exec('./var/www/htop');
echo "<pre>$output</pre>";
?>
<!-- Intégration de la libraire jQuery -->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="/bootstrap-3.1.1-dist/js/bootstarp.js"></script>
<script src="/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

</body>
</html> 
