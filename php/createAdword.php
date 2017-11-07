<!DOCTYPE html>
  <html>
    <head>
  <?php require('scripte.php');
        require('session_info.php'); ?>
  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
 
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
          <a class="z-depth-5 waves-effect waves-light btn red lighten-1" style="position:fixed;right: 20px;margin:20px;border-radius:25px;" href="logout.php">logout</a>
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
          <input  type="number" name="addPrice" class="validate">
          <label>Preis setzen</label>
        </div>
      </div>
   </div>
 </div>
 <input type="image" style="width :50%;float:right; " src="<?php echo $_SESSION['pic_link']; ?>" /><br /> 
</div>
 
  <?php 


$id_customer=$_SESSION['id_customer'];

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
 <button class="waves-effect waves-light  btn" name="adnew" style="position:fixed;right: 20px;margin:20px;border-radius:25px;">speichern</button> 
 </form>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </body>
  </html>
