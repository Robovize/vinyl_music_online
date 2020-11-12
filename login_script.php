<?php
include "conn.php";


ob_start();
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM user_table WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    /*
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        printf($user_id);
        exit();
    }
    */
    $row = mysqli_fetch_array($result);

    $dbPassword = $row['password'];

    if (password_verify($password, $dbPassword))
    {
       $_SESSION['firstName'] = $row['user_id'];
       $_SESSION['user_id'] = $row['user_id'];
        header("location: login_success.php");
    }else{
        header("location: login_error.php");
    }
}

ob_end_flush();







?>