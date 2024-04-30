<?php
require_once('../config/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "FORM SUBMITTED";
    $id = $_POST['id'];
    $name = $_POST['name'];
    echo $id." ".$name;
}
// $countries = ["Nepal","India","China","Russia","Japan"];


// if(!isset($_GET['id'])){
//    // header("location: users.php");
//    echo "ID is required";


// }else{

// $uuid = $_GET['id'];

// $sql = "SELECT * FROM user WHERE id = '$uuid'";

// if(mysqli_num_rows($result) == 1){
//     echo "User found";



    $sql = "UPDATE user SET name = '$name' WHERE id = '$id'";

    if(mysqli_query($con,$sql)){
        echo "<br>Record UPdated Successfully<br>";
    }
    else{
        echo "<br>Error updating record <br>".$sql."<br>".mysqli_error($con);
    }



    $result = mysqli_query($con,$sql);


    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            ?>

        <!-- create a form -->
        <h1 style="text-align:center">Update Your Account</h1>
    <form style="width: 500px;
        background-color:#ccc;
        padding:10px;
        margin:auto;"
        method="POST"
        
    >
    <input type="number" name="id" value=<?php echo $row['id'];  ?> hidden>
     Name:
     <input type="text" name="name" id="name" value = <?php echo $row['name'];?>><br>

    

     <input type="submit" name="register" value="Register">

    </form>

        
<?php
        echo "id: ".$rows["ID"]."-Name : ".$rows["name"]."<br>";
    }
    else{
        echo "0 results";
    }
echo $uuid;

?>