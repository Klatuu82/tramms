<?php 
  session_start();

  function showLoginWindow($status) 
  {
               //Login-fenster:
        if($status == 1) {
          echo "Benutzername/Passwort falsch.";
          } 
        header('location:../index.php');  
  }

  if(isset($_SESSION['username'])) 
  {
     //       createAdminWindow();
    $name = $_SESSION['username'];
    $permission = $_SESSION['permission'];
    if($permission == "admin" && !$_SERVER['SERVER_NAME'] == "admin.php")
    {
      header('location:admin.php');
    }else if($permission == "editor" && !$_SERVER['SERVER_NAME'] == "customer.php")
    {
      header('location:customer.php');
    }
  }else
  {
    showLoginWindow(0);      
  }
?>
