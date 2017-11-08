<html>
  <head>
    <?php 
      require("session_info.php"); 
      require("scripte.php");
	  checkAdmin();?>
    <title>CONFIRM SOCIAL</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
  	<div class="row">
	  	<div class="col s4 " style="margin: 100px">
		    <div class="card horizontal" >
		      <div class="card-stacked">
		        <div class="card-content" style="font-size: 28px">
		  		<?php
		  		  if(isset($_POST['submit']))
		  		  {
		  		  	if(empty($_POST['name'])){
		  		  	  echo "Bitte Name eingeben.<br>";
					  header("refresh:2;createsocial.php");
		  		  	}else if(empty($_POST['preLink'])){
		  		      echo "Bitte preLink eingeben.<br>";
					  header("refresh:2;createsocial.php");
		  		  	}else if(empty($_POST['Bild'])){
		  		  	  echo "Bitte Bild eingeben.<br>";
					  header("refresh:2;createsocial.php");
		  		  	}else{
			  		  	$name=$_POST['name'];
			  		  	$preLink=$_POST['preLink'];
			  		  	$Bild=$_POST['Bild'];
			  		  	$sql="INSERT INTO t_social (name,preLink,Bild) values('$name','$preLink','$Bild')";
			  		  	$ruckgabe = get_daten($sql);
			  		  	echo $_POST['name'];
						header("location:admin.php");
		  		  	}
		  		  }  
		  		  	?>		
		        </div>
		      </div>
		    </div>
	    </div>
	    <div class="col s8 " style="margin: 100px">
    	</div>
  </div>
  	    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>