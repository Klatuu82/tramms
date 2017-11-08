<?php
/**********************************************************************************************************************

  updateSocialLink.php

  &Uuml;bernimmt die Formulardaten aus Cutomer.php im Social-Link-Bereich und &auml;ndert die Daten in 
  t_customer_social

  erstellt: 08.11.2017
  zuletzt ge&auml;ndert 08.11.2017

  AUTOR: Stefan, Michael

**********************************************************************************************************************/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Adwords</title>
		
    <?php 
    
    //Session abfragen und eventuell rausschmeissen.
    require("session_info.php");
    checkEditor();
    
		require("scripte.php")
    ?>
		
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
        //POST Variablen an lokales script &uuml;bregeben:
        $id_customer = $_SESSION['id_customer'];

        //Formulardaten aus Customer.php
				$id_social = $_POST['id'];
        $active = $_POST['active'];
        $extension = $_POST['extension'];
        
        echo "active:".$active;
        
				$table = "t_customer_social";
				$verbindung = mysqli_connect("localhost", "root", "", "adWords");

				//activ und extention werden gesetzt:
				if($active)
        {
          //active gesetzt:
          $sql = "UPDATE $table SET activ=1, extention='$extension' WHERE id_customer=$id_customer AND id_social=$id_social";
        } 
        else 
        {
          //active nicht gesetzt:
          $sql = "UPDATE $table SET activ=0, extention='$extension' WHERE id_customer=$id_customer AND id_social=$id_social";
        }

        $result = mysqli_query($verbindung, $sql);

				if(!$result)
        {
           echo $sql."<br />";  
  	       header("refresh:4;customer.php"); 
        
          // Der Lade-Circle:
        ?>
                 
            <div style="display:block;margin:auto;high:20%" class="preloader-wrapper big active">
             <div class="spinner-layer spinner-green-only">
               <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
        <?php 
        
        }
        
        ?>
		</form>
	</body>
</html>
