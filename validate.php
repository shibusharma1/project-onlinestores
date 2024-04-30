<?php
    require_once('config/database.php');
    $errors = Array();

if($_SERVER["REQUEST_METHOD"]=='GET'){
    echo "GET REQUEST";
}
if($_SERVER["REQUEST_METHOD"]=='POST'){
    echo "Form submitted successfully<br>";
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Name Validation 
    $name = trim($name);
    if(!strlen($name) > 0){
        echo "<bR>";

        $errors['name_error'] = "Name is required ";
        echo "<br>";

    }
    $pattern = "/^[a-zA-Z ]+$/";//it includes more than one alphabet with space
    if(!preg_match($pattern,$name)){
        echo "<br>";
        echo "<br>";

        $errors['name_error'] = "Name can't contain digits and special characters<br>";
        echo "<bR>";

    }

    //Email validation
    $email = trim($email);
    if(!strlen($email) > 0){
        $errors['email_error'] = "Email can't be blank<br>";

    }else{
        $pattern ="/^[a-z0-9\.-_]+@[a-z]+[\.][a-z]+([\.][a-z]{2})?$/";
        if(!preg_match($pattern,$email))
        {
            $errors['email_error'] = "Email address is not valid<br>";
        }
    }
    
    
    //Phone validation
    $phone = trim($phone);
    $phone_pattern = "/^9[87][0-9]{8}$/";
    if(!strlen($phone) > 0){
        $errors['phone_error'] = "Phone number is required.<br>";
        
    }else
    if(!preg_match($phone_pattern,$phone))   {
        $errors['phone_error'] = "Phone number is not valid.<br>";
    }
    
    
    
    // Gender validation 
    //New method
    // $gender_valid= array("male","female");
    // if(!in_array($gender,$gender_valid)){
        //  $errors['gender_error']="gender is not valid<br>";
        // }
        
        // Gender validation 
        //Alternative method
        if(empty($gender)){
            $errors['gender_error']="Please select your gender<br>";
        }
        else{
            //     if(!isset($gender)){
                //  $errors['gender_error']="Please select your gender2 <br>";
                //}
            }
            // country validation 
            //Alternative method
            if(empty($country)){
                $errors['country_error']="Please select your country<br>";
                
            }
            
            //country validation
            // $country=trim($country);
            // $country_valid= array("Nepal","India","China","Russia");
            // if(!in_array($country,$country_valid)){
                //  $errors['country_error']="Please provide country name<br>";
                // }
                
                //password validation
                $password = trim($password);
                if(!strlen($password) > 0){
                    $errors['password_error'] = "password is  required<br>";
            
                }else{
                if(strlen($password) >= 8){
                    $errors['password_error'] = "password should be greater than 8 digits<br>";
                    return false;
                   
                }else{
                    $pattern ="/^[a-zA-Z0-9@\.#]+$/";
                    if(!preg_match($pattern,$password))
                    {
                        $errors['password_error'] = "password is not valid<br>";
                    }
                }
            }

                //confirm password validation
                $confirm_password = trim($confirm_password);
                if(!strlen($confirm_password) > 0){
                    $errors['confirm_password_error'] = "Re enter your password is  required<br>";
            
                }else{
                    
                    if($confirm_password !== $password)
                    {
                        $errors['confirm_password_error'] = "confirm password and password should be same<br>";
                    }
                }

                echo $name." ".$email." ".$phone." ".$gender." ".$country." ".$dob." ".$password." ".$confirm_password;
                echo "<pre>";
                print_r($errors);
                echo "</pre>";
            
            
            
            
                
                $password = md5($password);
                $sql = "Insert into user (name,email,phone,gender,country,dob,password) values ('$name','$email','$phone','$gender','$country','$dob','$password')";
                
                if(mysqli_query($con,$sql)){
                    echo "<br>Successfully Inserted<br>";
                }
                else{
                    echo "<br>Error in Code<br>";
                }
}

     header("Location: /onlinestores/login.php");
       ?> 
  
            