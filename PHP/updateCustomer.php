<!DOCTYPE html>
<html>
<head>
	<title>Update Customer</title>
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
			$sql = "UPDATE `t_customer` SET `name` = \"{$_POST['name']}\", `text` = \"{$_POST['text']}\", `pic_link` = \"{$_POST['pic_link']}\", `e_Mail` = \"{$_POST['e_Mail']}\" WHERE id = \"{$_POST['id']}\"";
			$result = get_daten($sql);
			if($result)
			{
				echo "<p>Ihre Eingabe wurde erfolgreich gespeichert.</p>";
				echo "<p>Sie werden in 3 Sekunden automatisch weitergeleitet oder <a href=\"admin.php\">klicken Sie hier</a></p>";
				header("refresh:3;admin.php");
			}
		}
	?>
</div>
</body>
</html>