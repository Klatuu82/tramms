<html>
	<head>
      <?php require("session_info.php"); 
		  checkAdmin();
          require("scripte.php");?>
   		<title>NEW USER</title>
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <body>
    	<div class="row " style="margin:90px 90px 0px 90px">
        	<div class="col s6 z-depth-1" style="padding:10px">
          		<h5>new user</h5>
        	</div>
    	</div>
     	<div class="row " style="margin:0px 90px 90px 90px">
       		<form >
         		<div class="col s6 z-depth-1" style="padding:30px">
        			<div>
        				<div class="input-field">
         					<input type="text" class="validate">
         					<label >Name</label>
        				</div>
       				</div>
 					<div>
 						<div class="input-field">
					    	<input type="email" class="validate">
					    	<label for="email" data-error="wrong" data-success="right">Email</label>
 						</div>
					</div>
					<div>
						<div class="input-field">
 							<input type="text" >
 							<label >permission</label>
						</div>
						</div>
						<div>
							<div class="input-field">
							<input type="password" >
							<label >password</label>
							</div>
						</div>
					<a class="waves-effect waves-light btn" style="margin:20px">Save</a>
   				</div>
 			</form>
     	</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>