<?php include "conn.php";

?>
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
    <title>Item List</title>
</head>
<body>




    <?php 
        include "inc_header.php";
   











$item_id = ( isset($_GET["item_id"]) && !empty($_GET["item_id"]) ? $_GET["item_id"] : "");
$query = "SELECT * FROM item_table WHERE item_id= $item_id";


$result = mysqli_query($conn, $query);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

while ($row = mysqli_fetch_array($result)){
    $artist = $row['artist'];
    $album = $row['album'];
    $year = $row['year'];
    $genre = $row['genre'];
    $price = $row['price'];
    $user_id = $row['user_id'];
    $album_cover = $row['album_cover'];
}
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Item Update</title>
</head>

<body>
    <main>
        <div class="itemUpdateForm">
            <form action="item_update_script.php" method="post" enctype="multipart/form-data" id="itemUpdateForm">
                <input type="file" name="photo" id="fileSelect" class="inputfile" value="<?php echo "$album_cover" ?>">
                <input type="text" name="item_id" value="<?php echo "$item_id";?>" readonly>
                <input type="text" name="artist" value="<?php echo "$artist";?>">
                <input type="text" name="album" value="<?php echo "$album";?>">
                <input type="date" name="year" value="<?php echo "$year";?>">
                <input type="text" name="genre" value="<?php echo "$genre";?>">
                <input type="text" name="price" value="<?php echo "$price";?>">
                <input type="submit" name="update" value="Update Item">
                <input type="submit" name="delete" value="Delete Item" class="deleteButton">
            </form>
        </div>
        
    </main>




    <?php   include "inc_footer.php"  ?>
</body>

</html>