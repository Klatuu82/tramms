<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
  <script type="text/javascript">
           $(document).ready(function() {
               $(".message").hide();
               $("span.readmore").click(function(){
                   $(".message").show("speed");
                   $(this).hide();
               });
           });
       </script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <?php session_start();
  require("scripte.php");
  ?>
  <form method="POST" action="./PHP/login.php">
    <?php if(!isset($_SESSION['username'])){ ?><input type="submit" value="login" class="waves-effect waves-light btn light-blue lighten-1" name="login" style="float:right;margin-right:20px;border-radius:25px;"></a><?php }?>
  </form>
  <form method="POST" action="./PHP/logout.php">
    <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="float:right;margin-right:20px;border-radius:25px;"></a><?php }?>
  </form>
  <body>
    <div class="row" style="padding:30px">
      <div class="col s7"><div class="row">
        <form method="POST">
          <div class="row" style="margin-right:130px">
            <div class="input-field col s12 ">
              <i class="material-icons prefix" >search</i>
              <input type="text" class="validate" name="searchtext" placeholder="suchen" value="<?php if(isset($_POST['search'])){ echo $_POST['searchtext']; }?>" style=" box-shadow: 2px 2px 7px #e0e0e0;">
              <input type="submit" name="search" value="suchen" class="waves-effect waves-light btn light-blue lighten-2" style="margin:auto;border-radius:30px;width:250px;margin: 10px;margin-left:45px;">
    		    </div>
          </div>
          <div >
            <div class="card horizontal" style="width:90%">
              <div class="card-stacked">
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
          if(isset($_POST['searchtext']) && !empty($_POST['searchtext']))
          {
            $searchtext = $_POST['searchtext'];
            $rows = get_daten("SELECT id FROM `t_adword` WHERE adWord = \"$searchtext\"");
            $db_value = mysqli_fetch_assoc($rows);
            if(!$db_value['id'] == "")
            {?>
              <div class="col s5 z-depth-2"  style="width:40%;margin-top:50px;padding:20px">
                <div>
                </div>
                <div class="section" style="padding:20px">
                  <h4><?php echo get_customer_from_adword($searchtext); ?></h4>
                </div>
                <div class="section">
                  <div class="card horizontal" style="margin:0px">
                    <div class="card-image">
                      <img src="https://lorempixel.com/100/190/nature/6">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                        <div class="card-content" style="padding:20px;">
                          Styles make the formatting job much easier
                          <span class="readmore">... <i class=" material-icons" style="font-size:11;">add</i></span>
                          <div class="message">
                            <?php 
                              echo "Styles make the formatting job much easierStyles make the formatting job much easierStyles make the formatting job much easierStyles make the formatting job much easier" 
                            ?>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section" style="margin-top:-40px" >
                  <ul id="nav-mobile" class="left hide-on-med-and-down" style="padding:8px;margin-left:10px">
                    <?php
                      for ($i=0; $i < get_customersocials_count_from_name(get_customer_from_adword($searchtext)); $i++)
                      {
                        echo "<li style=\"float: left;margin:4px;width:100px\"><a href=\"#\"><img src=\"../src/logo1.png\" style=\"width:80px;\"><p style=\"width:80px;\">Facebook</p></a></li>";
                      } 
                    ?>
                  </ul>
                </div>
        <?php 
            }
          } 
        ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </body>
</html>
