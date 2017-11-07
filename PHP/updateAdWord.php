<!DOCTYPE html>
<html>
	<head>
		<title>Update Adwords</title>
		<?php require("session_info.php");
		      require("scripte.php")?>
		<!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<form>
			<?php
			if(isset($_POST['submit']))
			{
				$id=$_POST['id'];
				//$adWord=$_POST['adWord'];
				$price=$_POST['price'];
				$click_count=$_POST['click_count'];


				$table = "t_customer_adwords";
				$verbindung = mysqli_connect("localhost", "root", "", "adWords");

				    //sql-Abfrage,Verbindung zur Datenbank aufbauen

				$sql_name = "UPDATE $table SET price='$price' , click_count='$click_count' WHERE id=$id ";//   {$_SESSION['id_customer']}";
				$result = mysqli_query($verbindung,$sql_name);
				echo $sql_name;
				if($result){
				    echo "<br />".$price." in ".$table." erfolgreich ge&auml;ndert.<br />";
				}
				    header("refresh:7;customer.php");
				    echo "<a href=customer.php>Zur&uuml;ck</a>";
			}  
			    
			?>
		</form>

	</body>
</html>
