<?php
require_once('config/database.php');



$sql = "UPDATE user SET Name='Kajal' WHERE id = '20'";

if(mysqli_query($con,$sql)){
    echo "<br>Record Update Successfully<br>";
}
else{
    echo "<br>Error Update record <br>".$sql."<br>".mysqli_error($con);
}
?>