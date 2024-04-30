<?php
require_once('config/database.php');



$sql = "SELECT * FROM user";
$result = mysqli_query($con,$sql);



if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: ".$row['ID']."- Name: ".$row["Name"]."<br>";
    }}else{
        echo "0 Results";
    }

?>