<?php include "conn.php"; 

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
    <title>Add Item</title>
</head>
<body>

<?php 
        include "inc_header.php";
    ?>





    <div class="itemAddForm">
        <form action="item_add_script.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="photo" id="fileSelect" class="inputfile">
            <input type="text" name="artist" placeholder="artist">
            <input type="text" name="album" placeholder="album">
            <input type="date" name="year">
            <input type="text" name="genre" placeholder="genre">
            <input type="text" name="price" placeholder="price">
            <input type="submit" name="add" value="Add Item">
        </form>
    </div>






    <?php   include "inc_footer.php"  ?>
</body>

</html>