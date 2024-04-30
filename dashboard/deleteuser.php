<?php 

require_once('../config/database.php');

// print_r($_GET)

if(!isset($_GET['ID'])){
    header("location: users.php");

}
$uuid = $_GET['ID'];

echo $uuid;

$sql1 = "SELECT * FROM user WHERE id = '$uuid'";


$result = mysqli_query($con,$sql1);
// print_r($result);

if(mysqli_num_rows($result) == 1){
    echo "User found";



    $sql = "DELETE FROM user WHERE id = '$uuid'";

    if(mysqli_query($con,$sql1)){
        echo "<br>Record Deleted Successfully<br>";
    }
    else{
        echo "<br>Error deleting record <br>".$sql."<br>".mysqli_error($con);
    }



}else{
    echo "User not Found";
}



?>