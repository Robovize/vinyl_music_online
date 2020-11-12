<?php include "conn.php";?>
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
    ?>

<div id="itemList">
<table class="items">
<tr class="itemLegend">
    <th>Artist</th>
    <th>Album</th>
    <th>Year</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Action</th>
</tr>




<?php
    $query = "SELECT * FROM item_table WHERE user_id='{$_SESSION["firstName"]}'";

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result))
    {
        $artist = $row['artist'];
        $album = $row['album'];
        $year = $row['year'];
        $genre = $row['genre'];
        $album_cover = $row['album_cover'];
        $price = $row['price'];
        $user_id = $row['user_id'];
    ?>

        
            <tr class="item">
                <td> <?php echo "$artist"; ?> </td>
                <td> <?php echo "$album"; ?> </td>
                <td> <?php echo "$year"; ?> </td>
                <td> <?php echo "$genre"; ?> </td>
                <td> <?php echo "$price"; ?> </td>
                <td><a href = "item_update.php?item_id=<?=$row['item_id']?>">Update</a></td>
            </tr>
        











    <?php 
        }
    ?>
    </table>
</div>












<?php   include "inc_footer.php"  ?>
</body>
</html>