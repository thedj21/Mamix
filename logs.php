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
$output = shell_exec('cd /var/log |ls| tail mail.err');
echo "<pre>$output</pre>";
?>
	</div>
<!-- Le pied de page -->
		<?php include("footer.php"); ?>
    </body>
</html>
