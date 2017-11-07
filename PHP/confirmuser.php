<html>
  <head>
    <?php 
      require("session_info.php"); 
      require("scripte.php");
	  checkAdmin();?>
    <title>CONFIRM USER</title>
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
		  		  	if(empty($_POST['user_name'])){
		  		  	  echo "Bitte Name eingeben.<br>";
					  header("refresh:2;createuser.php");
		  		  	}else if(empty($_POST['user_password'])){
		  		      echo "Bitte Password eingeben.<br>";
					  header("refresh:2;createuser.php");
		  		  	}else if(empty($_POST['id_customer'])){
		  		  	  echo "Bitte id eingeben.<br>";
					  header("refresh:2;createuser.php");
		  		  	}else if(!is_numeric($_POST['id_customer'])){
		  		  	  echo "Bitte Nummer eingeben.<br>";
					  header("refresh:2;createuser.php");
		  		    }else{
			  		  	$pass=hash('sha256',$_POST['user_password']);
			  		  	$name=$_POST['user_name'];
			  		  	$permission=$_POST['permission'];
			  		  	$customer=$_POST['id_customer'];
			  		  	$sql="INSERT INTO t_user (name,pwd,permission,id_customer) values('$name','$pass','$permission','$customer')";
			  		  	$ruckgabe = get_daten($sql);
			  		  	echo $_POST['user_name']."</br>".$_POST['permission'];
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