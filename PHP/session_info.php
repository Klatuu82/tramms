<?php 
  session_start();

  $permission = "";

  if(isset($_SESSION['permission']))
  {
    $permission = $_SESSION['permission'];
  }

  function checkEditor(){
    if($permission != "editor")
    {
      header('location:../login.php');
    }
  }

  function checkAdmin(){
    if($permission != "admin")
    {
      header('location:../login.php');
    }
  }
  
?>
