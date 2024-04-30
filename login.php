<?php

session_start();
require_once('config/database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sql = "SELECT * from user WHERE Phone ='$phone'";
    $result = mysqli_query($con,$sql);
    

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if($row['password'] == md5($password)){
        $_SESSION['uid'] =$row['id'];
        header("Location: /onlinestores/dashboard");

    }
    else{
        echo "PHONE AND EMAIL DOESN'T MATCH";
        
    }
}else{
    echo "Phone number not found";


}
}


    $title = "Login Page";
    $active = "login";
    require('includes/header.php');?>
    

    <h1 style="text-align:center">Login Account</h1>
    <form style="width: 500px;
        background-color:#ccc;
        padding:10px;
        margin:auto;"
        method="POST"
        
    >
    
     <br>
     <br>
     <br>
     Phone :
     <input type="text" name="phone" id="phone" value="<?php echo "" ?>">
     <br>
     <br>
     <br>
     Password :   
     <input type="password" name="password" id="password">
     <br>
     <br>
     <br>
     <input type="submit" name="submit" value= "Log In">
     <br>
     <br>
     <br>
</form>
<?php require('includes/footer.php');?>