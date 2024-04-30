<?php

    $title = "Register Page";
    $active = "register";
    require('includes/header.php');
    

    $countries = ["Nepal","India","China","Russia","Japan"];

    ?>
    
    <h1 style="text-align:center">Register new Account</h1>
    <form style="width: 500px;
        background-color:#ccc;
        padding:10px;
        margin:auto;"
        method="POST"
        action="validate.php"
        
    >
     Name:
     <input type="text" name="name" id="name"><br>
     <?php
        if(isset($errors['name_error'])){
            echo $errors['name_error'];
        }
     ?>

     Email:
     <input type="text" name="email" id="email"><br>
     <?php
        if(isset($errors['email_error'])){
            echo $errors['email_error'];
        }
     ?>
     Phone:
     <input type="text" name="phone" id="phone"><br>
     <?php
        if(isset($errors['phone_error'])){
            echo $errors['phone_error'];
        }
     ?>
     Gender:<br>
     Male:<input type ="radio" name="gender" id="male" value="male" ><br>

     Female:<input type ="radio" name="gender" id="female" value="female"><br>

     <?php
        if(isset($errors['gender_error'])){
            echo $errors['gender_error'];
        }
     ?>

     Country:
     <select name = "country" id="country">
        <option value="">Select a country</option>
        <?php 
        foreach($countries as $key => $value)
        {
        echo "<option value='$value'>$value</option>";
}
        ?>
        

     </select>
     <br>
        <?php
        if(isset($errors['country_error'])){
            echo $errors['country_error'];
        }
       ?>

     Date of Birth:<input type="date" name="dob" id="dob" ><br>
     <?php
        if(isset($errors['dob_error'])){
            echo $errors['dob_error'];
        }
     ?>
     Password:<input type="password" name="password" id="password"><br>
     <?php
        if(isset($errors['password_error'])){
            echo $errors['password_error'];
        }
     ?>
     confirm Password:<input type="password" name="confirm_password" id="confirm_password"><br>
     <?php
        if(isset($errors['confirm_password_error'])){
            echo $errors['confirm_password_error'];
        }
     ?>

     <input type="submit" name="register" value="Register">
       </form>
       
    <?php
    
        require('includes/footer.php');
    ?>