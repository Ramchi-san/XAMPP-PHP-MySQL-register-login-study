<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName =$_POST['lName'];
    $email =$_POST['email'];
    $password=$_POST['password'];

    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";

    $result=$conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email address already exists!";
    } else {
        $insertValue="INSERT INTO users(first_name, last_name, email, account_password)
                        VALUE('$firstName', '$lastName', '$email', '$password')";
        if($conn->query($insertValue)==TRUE){
            header("location: index.php");
        } else{
            echo "Error:".$conn->error;
        }
    }

}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkAccount = "SELECT * FROM users WHERE email='$email' AND account_password='$password'";
    $resultingAccount = $conn->query($checkAccount);

    if($resultingAccount->num_rows > 0){
        session_start();
        $row=$resultingAccount->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("location:homepage.php");
        exit();
    } else{
        echo "Not Found, Incorrect email or password!";
    }


}

?>