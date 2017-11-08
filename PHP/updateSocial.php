<!DOCTYPE html>
<html>
<head>
	<title>Update Social</title>
	<?php require("session_info.php");
	      require("scripte.php");
		  checkAdmin();?>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div>
	<?php 
		if(isset($_POST['submit']))
		{
			$sql = "UPDATE `t_social` SET `name`= \"{$_POST['name']}\" ,`preLink`= \"{$_POST['preLink']}\" ,`Bild`= \"{$_POST['Bild']}\" WHERE id = \"{$_POST['id']}\"";
			$result = get_daten($sql);
			if($result)
			{
				echo "<p>Ihre Eingabe wurde erfolgreich gespeichert.</p>";
				echo "<p>Sie werden in 7 Sekunden automatisch weitergeleitet oder <a href=\"admin.php\">klicken Sie hier</a></p>";
				header("refresh:7;admin.php");
			}
		}
		
	?>
</div>
</body>
</html>