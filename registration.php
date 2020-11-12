<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Music Online Registration</title>
</head>

<body>
    <?php include "inc_header.php"; ?>



    <div class="regForm">
        <form class="regForm" action="reg_script.php" method="post">
            <input type="text" placeholder="Enter your first name" name="firstName">
            <input type="text" placeholder="Enter your last name" name="lastName">
            <input type="email" placeholder="Enter your email" name="email">
            <input type="tel" placeholder="Enter your phone" name="phone">
            <input type="password" placeholder="Enter your password" name="password">
            <input type="submit" value="Register" name="register">
        </form>
    </div>



    <?php   include "inc_footer.php"  ?>
</body>

</html>