<html>
    <head>
		<title>NEW CUSTOMER</title>
        <?php require('scripte.php');
        require('session_info.php'); 
        checkAdmin();?>
  
        <!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                    <textarea name="text" id="textarea1" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;"></textarea>
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
                <div class="row">
			<div class="col s6">
              <button name="submit" class="waves-effect waves-light btn" style="margin:20px">Save</button>
			  </div>
			  </form>
			  <form method="POST" action="admin.php">
			  <div class="col s6">
			  <button name="back" class="waves-effect waves-light btn red lighten-1" style="float:right; margin:20px">Back</button>
			  </div>
			  </form>
            </div>
            </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
 </html>