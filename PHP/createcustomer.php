<html>
    <head>
        <?php          
          session_start();
          if(!isset($_SESSION['permission'])){
            header('location:../index.php');
          }else if(!($_SESSION['permission'] == "admin")){
            header('location:customer.php');
          }
          require("scripte.php");?>
        <title>NEW CUSTOMER</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <body>
    <div  class="row " style="margin:90px 90px 0px 90px">
        <div class="col s6 z-depth-1" style="padding:10px">
            <h5>new Customer</h5>
        </div>
    </div >
    <div class="row " style="margin:0px 90px 90px 90px">
        <form method="post" action="confirmcustomer.php">
            <div class="col s6 z-depth-1" style="padding:30px">
                <div  >
                    <div class="input-field">
                      <input name="customer_name" type="text" class="validate">
                      <label >Name</label>
                    </div>
                </div>
                <div class="input-field " >
                    <textarea name="text" id="textarea1" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;">
                    hallo welt</textarea>
                    <label for="textarea1">Text</label>
                </div>
                <div >
                    <div class="input-field">
                        <input name="url" type="text" class="validate">
                        <label >Bild url</label>
                    </div>
                </div>
                <div>
                    <div class="input-field">
                        <input name="customer_email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
                <button class="waves-effect waves-light btn" name="submit" style="margin:20px">button</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
 </html>
