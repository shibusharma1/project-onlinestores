<?php
require_once('../config/database.php');



$sql = "SELECT * FROM user";
$result = mysqli_query($con,$sql);
?>

<table border="1" cellpadding = "2" cellspacing = "0">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>Gender</th>
        <th>password</th>
        <th>DOB</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php

    // foreach($users as $user){
        // print_r($user);
        // echo "<tr>";
        //     echo "<td>".$user[0]."</td>";
        //     echo "<td>".$user[1]."</td>";
        //     echo "<td>".$user[2]."</td>";
        //     echo "<td>".$user[3]."</td>";
        //     echo "<td>".$user[4]."</td>";
        //     echo "<td>".$user[5]."</td>";
        //     echo "<td>".$user[6]."</td>";
        // echo "</tr>";

    // }

    ?>


<?php


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
                 echo "<td>".$row['ID']."</td>";
                 echo "<td>".$row['Name']."</td>";
                 echo "<td>".$row['Email']."</td>";
                 echo "<td>".$row['Phone']."</td>";
                 echo "<td>".$row['Country']."</td>";
                 echo "<td>".$row['Gender']."</td>";
                 echo "<td>".$row['Password']."</td>";
                 echo "<td>".$row['DOB']."</td>";
                 echo "<td>";
                 $uuid = $row['ID'];
?>
                <a href="/onlinestores/dashboard/deleteuser.php?id=<?php echo $uuid; ?>">Delete User</a>
                
                <a href="/onlinestores/dashboard/Updateuser.php?id= <?php echo $uuid; ?>">Update User</a>
<?php
        echo "</tr>";
    }}else{
        echo "0 Results";
    }

?>

</tbody>
</table>