<?php
  //$verbindung = mysqli_connect("localhost", "root", "", "cbm") || die("Fehler beim Verbindungsaufbau");
  /*$verbindung = mysqli_connect("localhost", "root", "", "adWords");
  if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
  };
  if(!mysqli_set_charset($verbindung, "utf8"))
  {
    echo "Zeichensatzfehler";
    exit;
  }  
  $keyword = "bing";
  //Abfrage Sozials;
  $sql1 = 'SELECT name FROM t_kunden WHERE name = "bing"';
  $sozialabfrage = 'SELECT t_kunden.name as "Kunden Name", 
                           t_sozial.name AS "Sozial Name" 
                    FROM t_kunden, t_sozial, t_kunden_sozial_detail 
                    WHERE t_kunden.name = "Twitter Inc." AND 
                          t_kunden_sozial_detail.id_kunden = t_kunden.id AND 
                          t_kunden_sozial_detail.id_sozial = t_sozial.id';
  echo "<table>";
  $sql = "SELECT name, text FROM t_kunden";
  $rueckgabe = mysqli_query($verbindung, $sozialabfrage);
  $name = mysqli_query($verbindung, $sql1);
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
  while($datensatz = mysqli_fetch_assoc($name)){
    echo $datensatz['PETER'];
    echo " ";
    //echo $datensatz['vorname'];
    echo "<br />";
  }
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
  foreach($rueckgabe as $wert){
    echo "<tr>";
    foreach($wert as $data){
      echo "<td>$data</td>";
      
    }
    
    echo "</tr><br />";
  }
  
  close($verbindung);*/
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
    $rows = mysqli_query($verbindung, $sql);
    
    return $rows;
  }
  /*SELECT t_customer.name 
FROM `t_customer_adwords`, t_customer 
WHERE t_customer_adwords.adWord = "Ferienwohnung" AND t_customer_adwords.id_customer = t_customer.id*/
  
  function delete_entries($id_arg, $table){
  
    $sql = "DELETE FROM $table WHERE id = $id_arg";
    $rows = get_daten($sql);
    
    return $rows;
  }
  
  /* Erstellen von Kunden
   * $name = Firmenname;
   * $text = Beschreibung;
   * $pic_Link = Firmenlogo Link
   * $e-Mail = E-Mail Adresse
   *
   * Return INT  
  */
  function create_customer($name, $text, $pic_Link, $e_Mail){
    $table = "t_customer";
    
    $sqltest = "INSERT INTO $table (name, text, pic_Link, e_Mail) VALUES ('$name', '$text', '$pic_Link', '$e_Mail')";
    $rows = get_daten($sql);
    
    return $rows;
  }
  
  /* Erstellen von Sozial
   * $name = Firmenname;
   * $preLink = Link;
   *
   * Return INT  
  */
  function create_social($name, $preLink){
    $table = "t_social";
    
    $sql = "INSERT INTO $table (name, preLink) VALUES ('$name', '$preLink')";
    $rows = get_daten($sql);
    
    return $rows;
  }
  
  /* Erstellen von User
   *
   * $name = Firmenname;
   * $preLink = Link;
   * $pwd = passwordhash
   * $permission = Rechte
   * $id_customer = Kunden ID   
   *
   * Return INT  
  */
  function create_user($name, $pwd, $permission, $id_customer){
    $table = "t_user";
        
    $sql = "INSERT INTO $table (name, pwd, permission, id_customer) VALUES ('$name', '$pwd', '$permission', '$id_customer')";
    $rows = get_daten($sql);
    
    return $rows;
  }  
  
  /* Kunden mit Adwords verbinden
   * $id_customer = Kunden ID
   * $adword = Wort
   * $price = Preis f&uuml;r das Wort
   * $click_count = Z&auml;hler f&uuml;r Klicks
   *
   * Return INT  
  */
  function set_customer_adwords($id_customer, $adWord, $price, $click_count){
    
    /* Erstellen von AdWords (Unique)
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
  
  /* Kunden mit Sozials verbinden
   * $id_customer = Kunden ID
   * $id_social = Sozial ID
   *
   * Return INT  
  */
  function combine_customer_social($id_customer, $id_social, $extention){
    $table = "t_customer_social";
      
    $sql = "INSERT INTO $table (id_customer, id_social, extention) VALUES ('$id_customer', '$id_social', 'extention')";
    $rows = get_daten($sql);
    
    return $rows;
  }
  
  /* Inhalt aus Spalte zurück geben
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
  
  /* Gibt die Menge der Socials wieder
   *
   * $id von customer
   * 
   * Return int
   *
  */
  function get_customersocials_count_from_name($name){

    $sql = "SELECT t_customer_social.id_social FROM t_customer_social, t_customer WHERE t_customer_social.id_customer = t_customer.id AND t_customer.name = \"$name\"";
    $rows = get_daten($sql);
    $count = 0;
    $db_value = mysqli_fetch_assoc($rows);
    var_dump($rows);

    foreach ($rows as $key => $value) {
      $count++;
      echo "<br>";
      var_dump($value);
    }

    return $count;
  }


  //echo get_customersocials_count_from_name(get_customer_from_adword("A4"));
  get_customersocials_count_from_name("Audi");


  function get_customer_from_adword($adWord){
  
    $sql = "SELECT t_customer.name FROM t_customer, t_customer_adwords WHERE adWord = '$adWord' AND t_customer.id = t_customer_adwords.id_customer";
    $rows = get_daten($sql);
    
    $db_value = mysqli_fetch_assoc($rows);
    $value = $db_value['name'];
    
    return $value;
  }
  
  function get_customerpic_from_adword($adWord){
  
    $sql = "SELECT t_customer.pic_link FROM t_customer, t_customer_adwords WHERE adWord = '$adWord' AND t_customer.id = t_customer_adwords.id_customer";

    $rows = get_daten($sql);
    
    $db_value = mysqli_fetch_assoc($rows);
    $value = $db_value['pic_link'];
    
    return $value;
  }
  
  function get_customertext_from_adword($adWord){
  
    $sql = "SELECT t_customer.text FROM t_customer, t_customer_adwords WHERE adWord = '$adWord' AND t_customer.id = t_customer_adwords.id_customer";

    $rows = get_daten($sql);
    
    $db_value = mysqli_fetch_assoc($rows);
    $value = $db_value['text'];
    
    return $value;
  }

?>
