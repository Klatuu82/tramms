<?php 
  session_start();

  $permission = "";

  if(isset($_SESSION['permission']))
  {
    $permission = $_SESSION['permission'];
  }

  function checkEditor(){
  	
    if($GLOBALS['permission'] != "editor")
    {
	  header('location:../php/login.php');
    }
  }

  function checkAdmin(){
    if($GLOBALS['permission'] != "admin")
    {
      header('location:../php/login.php');
    }
  }
  
?>
