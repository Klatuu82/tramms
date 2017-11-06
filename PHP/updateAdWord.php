<form>
<?php
$id=$_POST['id'];
//$adWord=$_POST['adWord'];
$price=$_POST['price'];
$click_count=$_POST['click_count'];


$table = "t_customer_adwords";
$verbindung = mysqli_connect("localhost", "root", "", "adWords");

    //sql-Abfrage,Verbindung zur Datenbank aufbauen

$sql_name = "UPDATE $table SET price='$price' , click_count='$click_count' WHERE id=$id ";//   {$_SESSION['id_customer']}";
$result = mysqli_query($verbindung,$sql_name);
echo $sql_name;
if($result){
    echo "<br />".$price." in ".$table." erfolgreich ge&auml;ndert.<br />";
}                               
    echo "<a href=customer.php>Zur&uuml;ck</a>";  
    
?>
</form>
