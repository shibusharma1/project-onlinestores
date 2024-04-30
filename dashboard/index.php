<?php

session_start();
if(!isset($_SESSION['uid'])){
    header("Location:/onlinestores/login.php");
}
    $title = "Welcome User";
    $active = "dashboard";
    require('../includes/header.php');
    $users = [
        ['abc','ab@gmail.com',9819099126,1,2,md5('password'),'2002-1-4'],
        ['abcd','abcd@gmail.com',9819099122,1,2,md5('password1'),'2002-11-5'],
        ['abce','abe@gmail.com',9819099165,1,2,md5('password3'),'2002-1-4'],
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Dashboard</h1>
    <hr>
    List of Users

    <table>
    <thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Gender</th>
        <th>password</th>
        <th>DOB</th>
        </tr>
    </thead>
    <tbody>

    <?php

    foreach($users as $user){
        // print_r($user);
        echo "<tr>";
        echo "<td>".$user[0]."</td>";
        echo "<td>".$user[1]."</td>";
        echo "<td>".$user[2]."</td>";
        echo "<td>".$user[3]."</td>";
        echo "<td>".$user[4]."</td>";
        echo "<td>".$user[5]."</td>";
        echo "<td>".$user[6]."</td>";
        echo "</tr>";

    }

    ?>

    </tbody>


    </table>
    
</body>
</html>



<h1 style="color:blue;
           text-align:center;">
    Hello, Welcome to Your Dashboard...
</h1>






<?php require('../includes/footer.php');?>