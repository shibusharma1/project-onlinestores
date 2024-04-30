<?php
//     echo "Welcome to the stage where we are ready to connect with database <br>";
//     //connecting to database
//     $servername = "localhost";
//     $username = "root";
//     $password = "";

//     //create a connection
//     $conn = mysqli_connect($servername,$username,$password);
//     //Die if conection not etablished

//     if (!$conn){
//         die("Sorry we failed to connect :".mysqli_connect_error());
//     }
//     else{
//     echo "DB connected successfully";
// }
//   #Create a database 
//     $ram = "CREATE DATABASE shibu";

//     $res = mysqli_query($conn , $ram);
//     echo "<br>";
//     //Check for the database creation success
//     if($res){
        
//         echo "DB created successfully!!!";
//     }
//     else{
        
//         echo "DB not created successfully because of this error ---->".mysqli_error($conn);
//     }  
// echo "Welcome to the stage where we are ready to connect with database <br>";
    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinestores";

    //create a connection
    $con = mysqli_connect($servername,$username,$password,$dbname);

    
    // if(!$con){
    //     echo "Unable to connect to database<br>".mysqli_connect_error();
    // }
    
    //Check Connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    ?>

