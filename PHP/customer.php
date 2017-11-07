<?php/*

customer.php

beschreibung:

Zeigt Kundenspezifische Datens&auml;tze aus der t_customer Tablle an und erlaubt das updaten und speichern der adWords.


autor:Michael,Stefan,Raslan(HTML)
erstellt am: 06.11.20017
ge&auml;ndert: 06.11.20017-15:00

*/?>
<!DOCTYPE html>
<html>
  <head>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <a class="waves-effect waves-light btn red lighten-1" style="position:fixed;right: 20px;margin:20px;border-radius:25px;" href="logout.php">logout</a>
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
        <?php
          session_start();
          $table = "t_customer";
          $verbindung = mysqli_connect("localhost", "root", "", "adWords");
          $id_customer=$_SESSION['id_customer'];
          //sql-Abfrage,Verbindung zur Datenbank aufbauen
          $sql_name = "SELECT name, text,e_Mail,pic_link FROM $table WHERE id = $id_customer";
          $result = mysqli_query($verbindung,$sql_name);
          if($result != "")
          {   //Wenn der Eintrag in der Datenbank gefunden wird
            $row = mysqli_fetch_assoc($result);
            echo $row['name'] ?>
            <input type="image" style="width :10%;float:right; "  name="logo" src="<?php echo $row['pic_link'] ?>" /><br />    
          <?php 
          } ?>
          <!--<ul class="collection with-header" style="width:100%; scroll;">
            <li class="collection-header">-->
              <div>
                <div>
                  <table style="margin:0px;padding:0px" width="100%">
                    <thead>
                      <tr>
                        <th>Adword Name</th>
                        <th>Count</th>
                        <th>Preis</th>
                        <a class="waves-effect waves-light  btn" name="adnew" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Neu</a>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        //session_start();

                        //Verbindung zu adWords Datenbank herstellen:
                        //$verbindung = mysqli_connect("localhost", "root", "", "adWords");

                        //SQL-Befehl
                        $sql="SELECT adWord,price,id,click_count FROM t_customer_adwords where id_customer = $id_customer";

                        //Ergebnis aus der Datenbank holen:
                        $result = mysqli_query($verbindung,$sql);

                        //Wenn das Ergebnis nicht leer ist, durchlaufe die while-Schleife
                        if($result != "" )
                        {
                          $i=0;
                          //Fetch jede Zeile aus der Ergebnistabelle:
                          while ($row = mysqli_fetch_assoc($result)) {
                          // Laufvariable i;
                          $i++; 
                          //HTML-Tabelleneintrag mit speichern (submit) Button in jeder Zeile:?> 
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
                                    <label >Click-Counter</label>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="row">
                                  <div class="input-field ">
                                    <input id="setPreis" type="number" value="<?php echo $row['price']; ?>" name="price" class="validate" style="width:90%;">
                                    <label >Preis</label>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <button type="submit" value="speichern" class="waves-effect waves-light  btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">Speichern</button>
                              </td>
                            </tr>
                          </form>
                          <?php 
                          } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                        <?php 
                        } ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </body>
</html>