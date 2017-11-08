<?php
  
  /* 
   * Liefert das Mysqli query Objekt
  */
  function get_daten($sql){
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
    $result = mysqli_query($verbindung, $sql);
    
    return $result;
  }
  
  /* 
   * Löscht Einträge aus der DB
  */
  function delete_entries($id_arg, $table){
  
    $sql = "DELETE FROM $table WHERE id = $id_arg";
    $rows = get_daten($sql);
    
    return $rows;
  }    
  
  /*
   * Kunden mit Adwords verbinden
   * $id_customer = Kunden ID
   * $adword = Wort
   * $price = Preis f&uuml;r das Wort
   * $click_count = Z&auml;hler f&uuml;r Klicks
   *
   * Return INT  
  */
  function set_customer_adwords($id_customer, $adWord, $price, $click_count){
    
    /*
     * Erstellen von AdWords (Unique)
     *
     * $adword = Wort  
     *
     * Return String  
    */
    function set_adword($adWord){
      $t_adword = "t_adword";
      $sql = "INSERT INTO $t_adword (adWord) VALUES ('$adWord')";      
      
      if(get_daten($sql)){
        return true;
      }else{        
        return false;
      }    
    }//END create_adword()
    $isCreated = set_adword($adWord);
    
    $table = "t_customer_adwords";
    // nur INSERT wenn noch nicht vorhanden adWord & id_customer
    $sql = "SELECT id FROM $table WHERE id_customer = '$id_customer' AND adWord = '$adWord'";
    $rows = get_daten($sql);
    $db_id = mysqli_fetch_assoc($rows);
    if(!$db_id['id'])
    {
      $sql = "INSERT INTO $table (id_customer, adWord, price, click_count) VALUES ('$id_customer', '$adWord', '$price', '$click_count')";
      $rows = get_daten($sql);
    }else
    {
      $sql = "UPDATE $table SET price = $price, click_count = $click_count WHERE id_customer = '$id_customer' AND adWord = '$adWord'";
      $rows = get_daten($sql);
    }
        
    if($rows)
    {
      return true;
    }else
    {
      return false;
    }
  }
    
  /*
   * Inhalt aus Spalte zurück geben
   *
   * $table = Tabelle
   * $column = Spalte
   * $id = id
   * Return Inhalt aus Column
  */
  function get_value($table, $columns, $id){
    
    $sql = "SELECT $columns FROM $table WHERE id = $id";
    $rows = get_daten($sql);
    
    $db_value = mysqli_fetch_assoc($rows);
    $value = $db_value[$columns];
    return $value;
  }  
  
  function get_customerid_from_adword($adWord){
  
    $sql = "SELECT t_customer.id FROM t_customer, t_customer_adwords WHERE adWord = '$adWord' AND t_customer.id = t_customer_adwords.id_customer";
    $result = get_daten($sql);
    
    $db_value = mysqli_fetch_assoc($result);
    $value = $db_value['id'];
    
    return $value;
  }
  
?>
