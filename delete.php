<?php
require_once('config/database.php');



$sql = "DELETE FROM user WHERE id = '21'";

if(mysqli_query($con,$sql)){
    echo "<br>Record Deleted Successfully<br>";
}
else{
    echo "<br>Error deleting record <br>".$sql."<br>".mysqli_error($con);
}
?>