<html>
  <head>
      <?php require("session_info.php"); 
          require("scripte.php");
		  checkAdmin();
		  ?>
	      <title>NEW SOCIAL</title>
	      <!--Import Google Icon Font-->
		    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		    <!--Import materialize.css-->
		    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		    <!--Let browser know website is optimized for mobile-->
		    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
		<form method="POST" action="./logout.php">
            <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="text-align:center;position:fixed; right:0px; margin:20px; border-radius:25px;"><?php }?>
        </form>
      <div class="row " style="margin:90px 90px 0px 90px">
          <div class="col s6 z-depth-1" style="padding:10px">
              <h5>new social</h5>
          </div>
      </div>
      <div class="row " style="margin:0px 90px 90px 90px">
          <form method="post" action="confirmsocial.php">
            <div class="col s6 z-depth-1" style="padding:30px">
              <div>
                <div class="input-field">
                  <input name="name" type="text" class="validate">
                  <label >Name</label>
                </div>
              </div>
              <div>
              <div class="input-field">
              <input name="preLink" type="text" >
              <label >preLink</label>
              </div>
            </div>

              <div class="input-field">
              <input name="Bild" type="text" >
              <label >Bild</label>
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