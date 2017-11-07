
                 
<form method="POST" action="add_customer.php" >
                        
<?php
$table = "t_customer";
$verbindung = mysqli_connect("localhost", "root", "", "adWords");

if(!empty($_POST['id'])){
    $id=$_POST['id'];
}
echo $_SESSION['id_customer'];
$sql_name="SELECT name, text,e_Mail,pic_link from $table where id=$id";
$result=mysqli_query($verbindung,$sql_name);
if($result !="")
{
    $row = mysqli_fetch_assoc($result);
    
    echo"<input type='text' name='updateName' value=".$row['name']." ><br />";
    echo"<textarea>".$row['text']."</textarea><br />";
    echo"<input type='mail' name='updateEmail' value=".$row['e_Mail']." ><br />";
    echo"<input type='text' name='updatePic_link' value=".$row['pic_link']." ><br />";
    
    echo"<input type='submit' name='updateSenden' />";
    
    
}
else{
    echo"<input type='text' name='updateName'><br />";
    echo"<textarea></textarea><br />";
    echo"<input type='mail' name='updateEmail'><br />";
    echo"<input type='text' name='updatePic_link'><br />";
    
    echo"<input type='submit' name='updateSenden' />";
}
  
    
    
?>
</form>
