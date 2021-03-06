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
  	<title>Gesucht</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <?php 
    session_start();
    require("scripte.php");

  ?>
  <body>
    <form method="POST" action="./logout.php">
        <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="float:right;margin-right:20px;margin-top:20px;border-radius:25px;"><?php }?>
    </form>
    <form method="POST" action="./login.php">
        <?php if(!isset($_SESSION['username'])){ ?><input type="submit" value="login" class="waves-effect waves-light btn light-blue lighten-1" name="login" style="float:right;margin-right:20px;margin-top:20px;border-radius:25px;"><?php }?>
    </form>
    <div class="row" style="padding:30px">
      <div class="col s7"><div class="row">
        <form method="POST">
          <div class="row" style="margin-right:130px">
            <div class="input-field col s12 ">
              <i class="material-icons prefix" >search</i>
              <input type="text" class="validate" name="searchtext" placeholder="suchen" value="<?php if(isset($_POST['search'])){ echo $_POST['searchtext']; }?>" style=" box-shadow: 2px 2px 7px #e0e0e0;">            
              <input type="submit" name="search" value="suchen" class="waves-effect waves-light btn light-blue lighten-2"
                             style="margin:auto;border-radius:30px;width:250px;margin: 10px;margin-left:45px;">
  		      </div>
          </div>
        </form>
      </div>
      <div >
        <div class="card horizontal" style="width:90%">
          <div class="card-stacked">
            <div class="card-content">
				<?php if(strtolower($_POST['searchtext']) == "q7") { echo "<img src=\"../src/Q7suche.png\"></src>"; }else if(strtolower($_POST['searchtext']) == "i7"){ echo "<img src=\"../src/i7suche.png\"></src>"; }else{ echo "<img src=\"../src/keinergebnissuche.png\"></src>"; } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      if(isset($_POST['searchtext']) && !empty($_POST['searchtext']))
      {
        $searchtext = $_POST['searchtext'];
        
        $result = get_daten("SELECT id FROM `t_adword` WHERE adWord = \"$searchtext\"");
        
        $row = mysqli_fetch_assoc($result);
        if(!$row['id'] == "")
        {
    ?>
    <div class="col s5 z-depth-2" style="width:40%;margin-top:50px;padding:0px">
      <div>
        <?php
          $sql = "SELECT t_customer.id, t_customer.name, t_customer.text, t_customer.pic_link   FROM t_customer, t_customer_adwords WHERE adWord = '$searchtext' AND t_customer.id = t_customer_adwords.id_customer";
          $result = get_daten($sql);
          $row = mysqli_fetch_assoc($result);
        ?>
      </div>
      <div class="section" >
        <h4 style="margin:20px;"><?php echo $row['name']; ?></h4>
      </div>
      <div class="section">
        <div class="card horizontal z-depth-1" style="margin:0px;padding:20px 20px 10px 20px;">
          <div class="card-image">
            <img src="<?php echo $row['pic_link']; ?> ">
          </div>
          <div class="card-stacked">
            <div class="card-content">
  		        <span class="readmore"><?php echo substr($row['text'], 0, 120)."..."; ?> <i class=" material-icons" style="font-size:11;">add</i></span>
              <div class="message">
                <?php echo $row['text']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" style="margin-top:-40px" >
        <ul id="nav-mobile" class="left hide-on-med-and-down" style="padding:8px;margin-left:10px">
          <?php  
  		      $sql = "SELECT t_social.preLink, t_customer_social.extention, t_social.Bild, t_social.name, t_customer_social.activ FROM `t_social`, t_customer_social WHERE t_customer_social.id_customer = ".get_customerid_from_adword($searchtext)." AND t_customer_social.id_social = t_social.id";
  		      $result = get_daten($sql);
            for ($i=0; $i < mysqli_num_rows($result); $i++)
            { 
              $row = mysqli_fetch_assoc($result);
			  if($row['activ']==1){
              	echo "<li style=\"float: left;margin:4px;width:100px\"><a href=".$row['preLink'].$row['extention']." target=\"_blank\"><img src=".$row['Bild']." style=\"width:80px;\"><p style=\"width:80px;\">".$row['name']."</p></a></li>";
              }
			} 
          ?>
      	
        </ul>
      </div>
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
