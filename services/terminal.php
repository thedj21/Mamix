<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
        <title>Mamix</title>
    </head>

    <body>
				<!-- L'en-tête -->
			<?php include ("header.php"); ?>
				<!-- Le menu -->
	<?php include("menu.php"); ?>
				<!-- Le corps de la page -->
	<div id="body">
		<?php
		// Affiche le nom d'utilisateur qui fait tourner le processus php/http
		// (sur un système ayant "whoami" dans le chemin d'exécutables)
		echo exec('whoami');
		?>

		<?php
		$output = shell_exec('uptime');
		echo "<pre>$output</pre>";
		?>

	</div>
				<!-- Le pied de page -->
		<?php include("footer.php"); ?>
    </body>
</html>

