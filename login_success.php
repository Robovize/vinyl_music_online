<?php
session_start();
ob_start();


if (!isset ($_SESSION['firstName']))
{
    header('location: registration.php');
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Successfully logged in</title>
</head>
<body>
<?php include "inc_header.php" ?>


<main id="userArea">
<p>Hi <?php echo $_SESSION['firstName']   ?> You are logged in</p>
<ol>
<li><a href="item_add.php">Add New Item</a></li>
<li><a href="item_list.php">Delete or Update</a></li>
<li><a href="logout.php">Logout Here</a></li>
</ol>
</main>
<?php   include "inc_footer.php"  ?>
</body>
</html>