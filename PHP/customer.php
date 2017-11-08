<?php
/********************************************************************************************************************************************

  Customer.php

  Zeigt Kundenspezifische Datens&auml;tze aus der t_customer Tablle an und erlaubt das updaten und speichern der adWords.

  erstellt am: 06.11.20017
  ge&auml;ndert: 08.11.2017-12:00

  Autor: Michael,Stefan,Raslan(HTML)

*********************************************************************************************************************************************/
/?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
    <a class=" z-depth-5 waves-effect waves-light btn red lighten-1" style="position:fixed;right: 20px;margin:20px;border-radius:25px;" href="logout.php">logout</a>
      <div class="row">
        <div class="col s8" style=" margin:0px;">
          <div >
            <div class="card horizontal" >
              <div class="card-stacked" >
                <div class="card-content" style="padding:3px 3px 3px 15px">
                  <h5>Editor Ebene</h5>
                </div>
              </div>
            </div>
          </div>
         <form action="createAdword.php" method="POST">
  
         <?php
  
          session_start();
  
          $table = "t_customer";
          $verbindung = mysqli_connect("localhost", "root", "", "adWords");
          $id_customer=$_SESSION['id_customer'];

          //sql-Abfrage,Verbindung zur Datenbank aufbauen
          $sql_name = "SELECT name, text,e_Mail,pic_link FROM $table WHERE id = $id_customer";
          $result = mysqli_query($verbindung,$sql_name);
  
          //Wenn der Eintrag in der Datenbank gefunden wird
          if($result != "")
          {   
              $row = mysqli_fetch_assoc($result);
              echo $row['name'];
           
              $_SESSION['pic_link'] = $row['pic_link']; 
              
           ?>

           <input type="image" style="width :50%;float:right; " name="logo" src="<?php echo $row['pic_link'] ?>" /><br /> 

          <?php 
          
          } 
          
          ?>
          
              <div>
                <div>
                  
                   <table style="margin:0px;padding:0px" class="striped" width="100%">
                     <thead>
                       <tr>
                        <th>Adword Name</th>
                        <th>Count</th>
                        <th>Preis</th>
                        <button class="waves-effect waves-light  btn"  style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Neu</button>
                      </tr>
                     </form>
                    </thead>
                    <tbody>
                    
                        <?php

                        //Verbindung besteht bereits...

                        //SQL-Befehl
                        $sql="SELECT adWord, price, id, click_count FROM t_customer_adwords WHERE id_customer = $id_customer";

                        //Ergebnis aus der Datenbank holen:
                        $result = mysqli_query($verbindung,$sql);

                        //Wenn das Ergebnis nicht leer ist, durchlaufe die while-Schleife
                        if($result != "" )
                        {

                          //Fetch jede Zeile aus der Ergebnistabelle:
                          while ($row = mysqli_fetch_assoc($result)) {


                          //HTML-Tabelleneintrag mit speichern (submit) Button in jeder Zeile:
                          
                         ?>
                          
                          <form method="POST" action="updateAdWord.php">  
                            <tr>
                              <td style="margin:0px;padding:0px">
                                <div style="margin:0px;">
                                  <?php echo $row['adWord']; ?>
                                </div>
                              </td>
                              <td>
                                <div class="row">
                                  <div class="input-field ">
                                    <input id="setCount" type="number" value="<?php echo $row['click_count']; ?>" name="click_count" class="validate" style="width:90%;">

                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="row">
                                  <div class="input-field ">
                                    <input id="setPreis" type="number" value="<?php echo $row['price']; ?>" name="price" class="validate" style="width:90%;">

                                  </div>
                                </div>
                              </td>
                              <td>
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="submit" value="speichern" class="waves-effect waves-light  btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Speichern</button>
                                
                              </td>
                            </tr>
                          </form>
                          <?php 
                          
                          } 
                          
                          ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
              <?php 
              
              }

              // SocialLinks eintragen -- >
              
              ?>
                        

              <form action="createSocialLink.php" method="POST">
              <div>
                <div>
                  
                   <table style="margin:0px;padding:0px" class="striped" width="100%">
                     <thead>
                       <tr>
                        <th>Social Link</th>
                        <th>URL</th>
                        <th>Extension</th>
                        
                      </tr>
                     </form>
                    </thead>
                    <tbody>
                        <?php
                        //session_start();

                        //Verbindung zu adWords Datenbank herstellen:
                        //$verbindung = mysqli_connect("localhost", "root", "", "adWords");

                        //SQL-Befehl
                        $sql="SELECT id, name, preLink, Bild FROM t_social";

                        //Ergebnis aus der Datenbank holen:
                        $result = mysqli_query($verbindung, $sql);

                        //Wenn das Ergebnis nicht leer ist, durchlaufe die while-Schleife
                        if($result != "" )
                        {
                          $i=0;
                          //Fetch jede Zeile aus der Ergebnistabelle:
                          while ($row = mysqli_fetch_assoc($result)) {
                          // Laufvariable i;
                          $i++; 
                          

                          $id_customer = $_SESSION['id_customer'];                 
                          $id_social = $row['id']; //id_social
                          
                          $sql="SELECT extention, activ FROM t_customer_social WHERE id_customer=$id_customer AND id_social=$id_social";
                          //echo $sql;
                          
                          $fullLink = mysqli_query($verbindung, $sql);
                          $extension = mysqli_fetch_assoc($fullLink);

                          $checkBoxActive = $extension['activ'];
                          
                          ?> 
                          
                          <form method="POST" action="updateSocialLink.php">  
                            <tr>
                              <td style="margin:0px;padding:0px">
                                <div style="margin:0px;">
                                  <?php echo $row['name']; ?>
                                </div>
                              </td>
                        <td>
                        <div class="row">
                          <div class="input-field ">
                            <input id="setPreis" type="text" value="<?php echo $extension['extention']; ?>" name="extension" class="validate" style="width:90%;">
                            </div>
                            </div>
                          </td>
                          <td>
                          <div class="row">  
                          
                            <?php
                            
                            if($checkBoxActive) { 
                              echo "<input name=\"active\" type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box".$row['id']."\" checked=\"checked\" />";
                            } else { 
                              echo "<input name=\"active\" type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box".$row['id']."\" />";                              
                            } 
                            
                            ?> 
                          
                            <label for="filled-in-box<?php echo $row['id'];?>">active</label>
                          </div>  
                       </td> 
                       <td>
                          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                          <button type="submit" name="checkSubmit" value="speichern" class="waves-effect waves-light  btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Speichern</button>
                      </td>
                    </tr>
                  </form>
                <?php 
                
                } 
                
                ?>
          </tbody>
        </table>
      </div>
    </div>
<?php 

}

/*
if(isset($_POST['checkSubmit']))
{
      $id_customer = $_SESSION['id_customer'];                 
      $id_social = $row['id']; //id_social
      
      $sql="INSERT INTO t_customer_social(id_social,customer_id) VALUES('$id_customer','$id_social')";
      $result = mysqli_query($verbindung, $sql);
}
*/
  
?>
</body>
</html>                   
                        
                        