<?php

require_once('config/database.php');
//id,name,email,phone,gender,country,dob,password
//Create.php


$users = [
    ['Abc','ab@gmail.com',9819099126,1,2,md5('password'),'2002-1-4'],
    
];



foreach($users as $user){
    $name = $user[0];
    $email = $user[1];
    $phone = $user[2];
    $country = $user[3];
    $gender = $user[4];
    $password = $user[5];
    $dob = $user[6];

    $sql = "Insert into user (name,email,phone,gender,country,dob,password) values ('$name','$email','$phone','$gender','$country','$dob','$password')";

    if(mysqli_query($con,$sql)){
        echo "<br>New record Successfully Inserted<br>";
    }
    else{
        echo "<br>Error in Code<br>".$sql."<br>".mysqli_error($con);
    }
}

?>
