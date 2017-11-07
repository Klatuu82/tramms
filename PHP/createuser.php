<html>
  <head>
      <?php require("session_info.php"); 
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
          <form method="post" action="confirmuser.php">
            <div class="col s6 z-depth-1" style="padding:30px">
              <div>
                <div class="input-field">
                  <input name="user_name" type="text" class="validate">
                  <label >Name</label>
                </div>
              </div>
    <p>
      <input name="permission" type="radio" id="test1" value="Admin" />
      <label for="test1">Admin</label>
    </p>
    <p>
      <input name="permission" type="radio" id="test2" value="Editor" />
      <label for="test2">Editor</label>
    </p>
                <div>
              <div class="input-field">
              <input name="user_password" type="password" >
              <label >password</label>
              </div>
            </div>

              <div class="input-field">
              <input name="id_customer" type="text" >
              <label ></label>
            </div>
                      <button name="submit" class="waves-effect waves-light btn" style="margin:20px">Save</button>

            </div>

          </div>
      </form>
      </div>
      <div class="input-field col s12">
    <select>
      <option value="" >Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
      <script type="text/javascript">
                  $(document).ready(function() {
                   $('select').material_select();
                  });
      
      </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
