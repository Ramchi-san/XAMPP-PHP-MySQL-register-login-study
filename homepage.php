<?php
session_start();
include 'connect.php'

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
</head>
<body>
    <div style="text-align: center; padding:15%">
        <p style="font-size: 50px; font-weight: bold;">
            Hello <?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
            ?>
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>