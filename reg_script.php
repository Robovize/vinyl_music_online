<?php

include "conn.php";

session_start();

$user_id = '';
$firstName = '';
$lastName = '';
$email = '';
$phone = '';
$password = '';




if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $hash = password_hash($password, PASSWORD_ARGON2I);


    $sql="INSERT INTO user_table (user_id, firstName, lastName, email, phone, password) VALUES ('$user_id', '$firstName', '$lastName', '$email', '$phone', '$hash')";


    $query = mysqli_query($conn, $sql);

    if ($query)
    {
        echo 'New user added';
        $_SESSION['registered'] = 'YES';
        $_SESSION['user'] = htmlspecialchars($user_id);
        header('Location: index.php');
    }else{
        echo 'Error: ' . $sql . "<br>" . mysqli_error($conn);
    }
}








?>