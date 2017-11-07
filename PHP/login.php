<!DOCTYPE html>
<html>
    <head>
    	  <?php 
          require("scripte.php");
		  require("session_info.php");?>
        <title>Admin</title>
        <!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	
    </head>
    <body><?php


function createAdminWindow() {
     
}

function showLoginWindow($status) 
{
             //Login-fenster:
      if($status == 1) {
	  		
        echo "<H1 class=\"red-text\" style=\"text-align:center;\">Benutzername/Passwort falsch.</H1>";
        } 
      $Vdata = file_get_contents("login_html.php");  
      echo $Vdata;
      

}

//>>>>
if(isset($_SESSION['username'])) 
{
   //       createAdminWindow();
  $name = $_SESSION['username'];
  $permission = $_SESSION['permission'];
  if($permission == "admin")
  {
    header('location:admin.php');
  }else if($permission == "editor")
  {
    header('location:customer.php');
  }
}else if(empty($_POST['pwd']))
{
  showLoginWindow(0);      
}else
{
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  //bekomme POST von HTML Login fenster
  $table = "t_user";
  $verbindung = mysqli_connect("localhost", "root", "", "adWords");

  //suche benutzer und passendes passwort
  $sql = "SELECT id_customer, pwd, permission FROM $table WHERE name='$name'";
  $rows = mysqli_query($verbindung, $sql);
  
  
  if($rows != "") 
  {
    //benutzer gefunden
    $db_pwd = mysqli_fetch_assoc($rows);
    //echo "DB: {$db_pwd['pwd']} <br >";
    //echo "Eingabe: ".hash('sha256', $pwd)."<br >";
    /*
    $verschluesselung = hash('sha256', $pwd);
    */
    
    // geheim: addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940
  
    //passwort verschluesseln und mit passwort in db vergleichen
    if(hash('sha256', $pwd) == $db_pwd['pwd']) 
    {
      //anmeldung erfolgreich
      $_SESSION['username'] = $name;
      $_SESSION['permission'] = $db_pwd['permission'];
      $_SESSION['id_customer'] = $db_pwd['id_customer'];
		  if($_SESSION['permission'] == "admin")
		  {
		    //echo "Willkommen ADMIN {$_SESSION['username']}<br >";
		    header('location:admin.php');
		  }else if($_SESSION['permission'] == "editor")
		  {
		    echo "Willkommen EDITOR {$_SESSION['username']}<br >";
		    header('location:customer.php');
		  }
          exit;
    //createAdminWindow();
      
    }
    else 
    {
        showLoginWindow(1);  
    }
    
  mysqli_close($verbindung);
  }
  else
  {
       showLoginWindow(1);
  }
}
?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
