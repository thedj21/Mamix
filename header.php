<div class="page-header">
	<h1>Uptime :	
<?php
		$output = shell_exec('uptime');
		echo "<pre>$output</pre>";
?>
	</h1>
</div>

