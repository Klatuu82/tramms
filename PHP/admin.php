<!DOCTYPE html>
<html>
<head>
	<?php require("scripte.php"); 
	session_start();?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style> 
	.bilder {
		width: 130px;
	    background-repeat: no-repeat;
	    background-size: auto 100%;
	    background-position: center;
	}
	    </style>
</head>
<body>

<form method="POST" action="./logout.php">
  <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="position:fixed; right:0px; margin:20px; border-radius:25px;"></a><?php }?>
</form>
<H1>Willkommen <?php echo $_SESSION['username'] ?></H1>
<div class="row">
	
	<div class="col s10" style=" margin:0px;margin-top:100px">
		<form method="POST" action="createCustomer.php">
	        <div class="card horizontal" >
	            <div class="card-stacked" >
	                <div class="card-content" style="display:block; padding:15px; font-size:24px">
	                    Customers<button class="waves-effect waves-light btn" style="float:right; margin-left:auto; margin-bottom: 0px;margin-top: 5px;">
	                    Create New</button>
	                </div>
	            </div>
	        </div>
		 </form>
	<ul class="collapsible" data-collapsible="accordion" style="width:100%;height:400px;overflow: scroll;">
	<?php 
		$sql = "SELECT `id`, `name`, `text`, `pic_link`, `e_Mail` FROM `t_customer`";
		$result = get_daten($sql);
		$count = mysqli_num_rows($result);
		for($i = 0; $i < $count; $i++){
			$daten = mysqli_fetch_assoc($result);?>
			  
            <li >
				<div class="collapsible-header" style="padding-bottom:5px;padding-top:5px;">
                    <div class="bilder" style="background-image: url('<?php echo $daten['pic_link']; ?>');"></div>
                    <p style="margin:10px 0px 10px 15px"><b><?php echo $daten['name']; ?></b></p>
                </div>
                <div class="collapsible-body">
                	<span>
				    <form method="POST" action="updateCustomer.php">
                        <table style="margin:0px;padding:0px">
                            <thead>
                                <tr>
                          			<th>customer_id</th>
		                            <th>Name</th>
		                            <th>text</th>
		                            <th>pic_Link</th>
		                            <th>e_Mail</th>
								    <th></th>
                        		</tr>
                     	   </thead>
                      <tbody>
					  <tr>
                      		<td style="margin:0px;padding:0px">
                            <div class="input-field " style="margin:0px;">
                            	<b><input  type="text" name="id" class="validate" style="width:90%;" value="<?php echo $daten['id']; ?>"></b>
                            </div>
                         	</td>
                         	<td style="margin:0px;padding:0px">
                            <div class="input-field " style="margin:0px;">
                                <b><input  type="text" name="name" class="validate" style="width:90%;" value="<?php echo $daten['name']; ?>"></b>
                            </div>
                       		</td>
                            <td>
                            <div class="input-field " >
                                <textarea id="textarea1" name="text" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;" ><?php echo $daten['text']; ?></textarea>                                     
                            </div>
                            </td>
                            <td>
							<div class="row">	
                            <div class="input-field ">
                            	<input  type="text" name="pic_link" class="validate" style="width:90%;" value="<?php echo $daten['pic_link']; ?>">
                            </div>
                            </div>

                            </td>
                            <td>
                              <div class="row">
                                    <div class="input-field ">
                                      <input type="email" name="e_Mail" class="validate" style="width:90%;" value="<?php echo $daten['e_Mail']; ?>">
                                  </div>
                              </div>
                            </td>
							<div class="row">
							<td><button type="submit" name="submit" value="save" class="waves-effect waves-light btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Save</button></td>
                            </div>
							</tr>
						
                     </tbody>
                  </table>
				  
			   </form>
                 </span>
               </div>
              </li>
			
			  <?php }?>
          </ul>
		  
      </div>
   </div>
   <div class="row">

       <div class="col s10" style=" margin:0px;margin-top:px">
	       <form method="POST" action="createUser.php">	
           	<div >
               <div class="card horizontal" >
                   <div class="card-stacked" >
                       <div class="card-content" style="display:block; padding:15px; font-size:24px">
                        Users<button class="waves-effect waves-light btn" style="float:right; margin-left:auto; margin-bottom: 0px;margin-top: 5px;">
                        Create New</button>
                    	</div>
                   </div>
               </div>
           </div>
		   </form>

           <ul class="collapsible" data-collapsible="accordion" style="width:100%;height:400px;overflow: scroll;">
		   <?php $sql = "SELECT t_user.id, t_user.name, t_user.pwd, t_user.permission, t_user.id_customer, t_customer.pic_link FROM t_user, t_customer WHERE t_customer.id = t_user.id_customer";
			  $result = get_daten($sql);
			  $count = mysqli_num_rows($result);
			  
			  for($i = 0; $i < $count; $i++){ 
			  	$daten = mysqli_fetch_assoc($result);
			  ?>
                 <li >
				 
                   <div class="collapsible-header" style="padding-bottom:5px;padding-top:5px;">
                    <div class="bilder" style="background-image: url('<?php echo $daten['pic_link']; ?>');"></div>
                    <p style="margin:10px 0px 0px 15px"><?php echo $daten['name']; ?></p>
                </div>
                    <div class="collapsible-body">
                     <span>
					 <form method="POST" action="updateUser.php">
                      <table style="margin:0px;padding:0px">
                         <thead>
                           <tr>
                               <th>user_id</th>
                               <th>Name</th>
                               <th>password</th>
                               <th>Permission</th>
                               <th>id_customer</th>
							</tr>
                         </thead>
                         <tbody>
                           <tr>
                              <td style="margin:0px;padding:0px">
                                  <div class="input-field " style="margin:0px;">
                                     <b><input  type="text" name="id" class="validate" style="width:90%;" value="<?php echo $daten['id']; ?>"></b>
                                 </div>
                            </td>
                            <td style="margin:0px;padding:0px">
                              <form >
                                <div class="input-field " style="margin:0px;">
                                   <b><input  type="text" name="name" class="validate" style="width:90%;" value="<?php echo $daten['name']; ?>"></b>
                               </div>
                          </td>
                                 <td>
                                   <div class="input-field " >
                                     <b><input  type="password" name="pwd" class="validate" style="width:90%;" value="<?php echo $daten['pwd']; ?>"><b>
                                  </div>
                               </td>
                               <td>
                                 <div class="row">
                                       <div class="input-field ">
                                          <b><input  type="text" name="permission" class="validate" style="width:90%;" value="<?php echo $daten['permission']; ?>"></b>
                                     </div>
                                 </div>

                               </td>
                               <td>
                                 <div class="row">
                                       <div class="input-field ">
                                          <b><input type="text" name="id_customer" class="validate" style="width:90%;" value="<?php echo $daten['id_customer']; ?>"> </b>
                                     </div>
                                 </div>
                               </td>
								<td><button type="submit" name="submit" value="save" class="waves-effect waves-light btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Save</button></td>
                               </tr>
                        </tbody>
                     </table>
					 </form>
                    </span>
                  </div>
                 </li>
				 <?php } ?>
             </ul>
         </div>
      </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>
