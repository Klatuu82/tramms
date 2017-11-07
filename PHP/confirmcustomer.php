<html>
  <head>
    <?php 
      require("session_info.php"); 
      require("scripte.php");?>
    <title>CONFIRM USER</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
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
		  		  	if(empty($_POST['customer_name'])){
		  		  	echo "Bitte Name eingeben.<br>";
              		header("refresh:2;createcustomer.php");
		  		  }else if(empty($_POST['text'])){
		  		  	echo "Bitte text eingeben.<br>";
		  		  	header("refresh:2;createcustomer.php");
		  		  }else if(empty($_POST['url'])){
		  		  	echo "Bitte id eingeben.<br>";
		  		  	header("refresh:2;createcustomer.php");
		  		  }else if(empty($_POST['customer_email'])){
		  		  	echo "Bitte E-Mail eingeben.<br>";
		  		  	header("refresh:2;createcustomer.php");
		  		  }else{

		  		  	$name=$_POST['customer_name'];
		  		  	$text=$_POST['text'];
		  		  	$url=$_POST['url'];
		  		  	$email=$_POST['customer_email'];
		  		  	$sql="INSERT INTO t_customer (name,text,pic_link,e_Mail) values('$name','$text','$url','$email')";
		  		  	$ruckgabe = get_daten($sql);
		  		  	echo $_POST['customer_name']."</br>".$_POST['customer_email'];
		  		  }
		  		  }  header("refresh:3;admin.php");
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
