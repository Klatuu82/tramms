<!DOCTYPE html>
<html>
	<?php
		require("../PHP/mat_include.php");
	 
		session_start();
		session_destroy();?>
	 <body></body>
	
	
			<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
			<form>
			   <span style="margin-left:24px">  Sie sind erfolgreich ausgelogt<br ></span>
			   <a class="waves-effect waves-light btn light-blue lighten-1 large" name="login" style="margin:auto; border-radius:25px;" href="../index.php">Zur&uuml;ck zur Startseite</a>
			   <?php 
				     <main>
        			<audio id="audio_with_controls" controls src="zonk.mp4"
        			type="audio/mp4" autoplay="true" >
          			</main>
				header("refresh:7;../index.php") ?>
			</form>
		   </div>
	
	</body>
</html>
