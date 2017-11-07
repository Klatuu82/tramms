<!DOCTYPE html>
  <html>
    <head>
  <?php require('scripte.php');
        require('session_info.php'); 
        checkEditor();?>
  
        <!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body background-image:
          url("\htdocs\src\logo1.png");
        height: 100%;
        outline: 1px solid;
        width: 100%;>
 
      <div class="row">
        <div class="col s8" style=" margin:0px;">
          <div >
            <div class="card horizontal" >
              <div class="card-stacked" >
                <div class="card-content" style="padding:3px 3px 3px 15px">
                  <h5>Neues AdWord anlegen</h5>
                </div>
              </div>
            </div>
          </div>
		  <form method="POST" action="./logout.php">
            <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="position:fixed; right:0px; margin:20px; border-radius:25px;"></a><?php }?>
        </form>
<div class="z-depth-3" style="margin:20px;width:75%">
   <div class="row">
      <form method="POST" class="col s12">
        <div class="row">
          <div class="input-field col s10">
            <input  type="text" name="addAdwort" class="validate">
            <label>Den Namen f&uuml;r das neue Adwort eintragen:</label>
          </div>
        </div>
    </div>
  <div class="row">
      <div class="row">
        <div class="input-field col s7">
          <input  type="number" name="addClick_count" class="validate">
          <label>Click_count eintragen</label>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="row">
        <div class="input-field col s7">
          <input  type="number" step="any" name="addPrice" class="validate">
          <label>Preis setzen</label>
        </div>
      </div>
   </div>
 </div>
 <img style="width :25%;float:right; " src="<?php echo $_SESSION['pic_link']; ?>" /><br /> 
</div>
 
  <?php 


$id_customer=10; //$_SESSION['id_customer'];

if(isset($_POST['adnew'])){
    $adWord=$_POST['addAdwort']; 
    $price= $_POST['addPrice'];
    $click_count=$_POST['addClick_count'];
    //echo $adWord."<br />";
    //echo $price."<br />";
    //echo $click_count."<br />";
    //echo $id_customer."<br />";
    $_result=set_customer_adwords($id_customer, $adWord, $price, $click_count);
    if($_result)
        header('location:customer.php');
}

  
?>
 <button class="waves-effect waves-light  btn" name="adnew" style="position:fixed;right: 0px;margin:20px;border-radius:25px;">speichern</button> 
 </form>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </body>
  </html>
  
  