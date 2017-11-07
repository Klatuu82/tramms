<!DOCTYPE html>
<html>
	<?php
		require("../PHP/mat_include.php");
	 
		session_start();
		session_destroy();?>
	 
	<form>
	   Sie sind erfolgreich ausgelogt
	   <a class="waves-effect waves-light btn light-blue lighten-1 large" name="login" style="margin:auto; border-radius:25px;" href="../index.php">Zur&uuml;ck zur Startseite</a>
	   <?php header("refresh:7;../index.php") ?>
	</form>
</html>