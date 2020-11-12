<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Music Online Login</title>
</head>

<body>

    <?php include "inc_header.php"; ?>

    <div class="loginForm">
        <form action="login_script.php" method="post">
            <input type="text" placeholder="Enter email" name="email" required>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>




    <?php   include "inc_footer.php"  ?>
</body>

</html>